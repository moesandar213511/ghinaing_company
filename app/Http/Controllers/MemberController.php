<?php

namespace App\Http\Controllers;

use App\CustomClass\MemberDate;
use App\CustomClass\Path;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.site_admin.member')->with([
            'url'=>'member'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('photo');
        $fileName = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path() . '/upload/member/', $fileName);

        Member::create([
            'photo'=>$fileName,
            'name'=>$request->get('name'),
            'position'=>$request->get('position'),
            'link'=>$request->get('link')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Member::find($id);
        $data['photo_url']=Path::$domain_url."upload/member/".$data->photo;
        return json_encode($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->get('id');
        if($request->hasFile('photo')){
            $photo = $request->file('photo');
            $photo_name = uniqid().'_'.$photo->getClientOriginalName();
            $photo->move(public_path('upload/member/'),$photo_name);
            $member = Member::find($id);
            $image_path=public_path().'/upload/member/'.$member->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Member::findOrFail($id)->update([
                'photo'=>$photo_name,
                'name'=>$request->get('name'),
                'position'=>$request->get('position'),
                'link'=>$request->get('link')
            ]);
        }else {
            Member::findOrFail($id)->update([
                'name'=>$request->get('name'),
                'position'=>$request->get('position'),
                'link'=>$request->get('link')
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Member::find($id);
        $image_path=public_path().'/upload/member/'.$member->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $member->delete();
    }

    public function get_all_member()
    {
        $members=Member::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($members as $data){
            $member_data=new MemberDate($data->id);
            array_push($arr,$member_data->getMemberData());
        }
        return json_encode($arr);
    }
}
