<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/site_admin/about')->with([
            'url'=>'about'
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
        //
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
      $description = $request->get('description');
      $introduction = $request->get('introduction');
      $technical_work = $request->get('technical_work');
      $vision = $request->get('vision');
      $mission = $request->get('mission');

        About::findOrFail($id)->update([
          'description'=>$description,
          'vision'=>$vision,
          'mission'=>$mission,
          'introduction'=>$introduction,
          'technical_work'=>$technical_work
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function get_all_about()
    {
        $abouts=About::all();
        // $arr=[];
        // foreach ($abouts as $data){
        //     $feedback_data=new FeedbackData($data->id);
        //     array_push($arr,$feedback_data->getFeedbackData());
        // }
        return json_encode($abouts);
    }
}
