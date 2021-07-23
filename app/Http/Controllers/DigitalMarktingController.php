<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Markting;

class DigitalMarktingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/site_admin/markting')->with(['url'=>'markting']);
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
        //return "Hello";
        Markting::create([
            'title'=>$request->get('title'),
            'description'=>$request->get('description'),
            'icon_name'=>$request->get('icon_name')
        ]);
        //return $request->get('icon_name');
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
        $data = Markting::find($id);
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
      $title = $request->get('title');
      $icon_name = $request->get('icon_name');
      $description = $request->get('description');

        Markting::findOrFail($id)->update([
          'title'=>$title,
          'icon_name'=>$icon_name,
          'description'=>$description
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
        $markting = Markting::find($id);
        $markting->delete();
    }

    public function get_all_markting()
    {
        $arr=Markting::all();
        return json_encode($arr);
    }
}
