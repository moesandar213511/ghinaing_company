<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partnercompany;
use App\CustomClass\PartnerData;
use App\CustomClass\Path;

class PartnercompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/site_admin/partner_company')->with([
            'url'=>'partner_company'
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
        $file->move(public_path() . '/upload/partnercompany/', $fileName);

        Partnercompany::create([
            'photo'=>$fileName,
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
        $data = Partnercompany::find($id);
        $data['photo_url']=Path::$domain_url."upload/partnercompany/".$data->photo;
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
            $photo->move(public_path('upload/partnercompany/'),$photo_name);

            $partner = Partnercompany::find($id);
            $image_path=public_path().'/upload/partnercompany/'.$partner->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Partnercompany::findOrFail($id)->update([
                'photo'=>$photo_name,
                'link'=>$request->get('link')
            ]);
        }else {
            Partnercompany::findOrFail($id)->update([
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
        $project = Partnercompany::find($id);
        $image_path=public_path().'/upload/partnercompany/'.$project->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $project->delete();
    }


    public function get_all_partnercompany()
    {
        $partner_company=Partnercompany::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($partner_company as $data){
            $partner_data=new PartnerData($data->id);
            array_push($arr,$partner_data->getPartnerData());
        }
        return json_encode($arr);
    }
}
