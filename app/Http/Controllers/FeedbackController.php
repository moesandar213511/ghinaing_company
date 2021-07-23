<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;
use App\CustomClass\Path;
use App\CustomClass\FeedbackData;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/site_admin/feedback')->with([
            'url'=>'feedback'
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
        $file->move(public_path() . '/upload/feedback/', $fileName);

        Feedback::create([
            'photo'=>$fileName,
            'name'=>$request->get('name'),
            'description'=>$request->get('description')
        ]);
        //return $request->get('description');
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
        $data = Feedback::find($id);
        $data['photo_url']=Path::$domain_url."upload/feedback/".$data->photo;
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
            $photo->move(public_path('upload/feedback/'),$photo_name);
            $feedback = Feedback::find($id);
            $image_path=public_path().'/upload/feedback/'.$feedback->photo;
            if(file_exists($image_path)){
                unlink($image_path);
            }
            Feedback::findOrFail($id)->update([
                'photo'=>$photo_name,
                'name'=>$request->get('name'),
                'description'=>$request->get('description')
            ]);
        }else {
            Feedback::findOrFail($id)->update([
                'name'=>$request->get('name'),
                'description'=>$request->get('description')
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
        $feedback = Feedback::find($id);
        $image_path=public_path().'/upload/feedback/'.$feedback->photo;
        if(file_exists($image_path)){
            unlink($image_path);
        }
        $feedback->delete();
    }

    public function get_all_feedback()
    {
        $feedbacks=Feedback::orderBy('id', 'desc')->get();
        $arr=[];
        foreach ($feedbacks as $data){
            $feedback_data=new FeedbackData($data->id);
            array_push($arr,$feedback_data->getFeedbackData());
        }
        return json_encode($arr);
    }
}
