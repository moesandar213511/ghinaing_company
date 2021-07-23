<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WebDesign;
use App\Website;

class WebController extends Controller
{
    public function index()
    {
        return view('admin/site_admin/our_website')->with(['url'=>'our_website']);
    }

    public function get_all_webdesign()
    {
        $web_design=WebDesign::all();
        return json_encode($web_design);
    }

    public function update(Request $request)
    {
    	$id = $request->get('id');
	    WebDesign::findOrFail($id)->update([
            'title'=>$request->get('title'),
            'description'=>$request->get('web_design')
        ]);
    }

//our website
    public function store(Request $request)
    {
        Website::create([
            'title'=>$request->get('web_title'),
            'description'=>$request->get('web_description'),
            'icon_name'=>$request->get('icon_name')
        ]);
    }

    public function get_all_website()
    {
        $arr=Website::all();
        return json_encode($arr);
    }


    public function edit($id)
    {
        $data = Website::find($id);
        return json_encode($data);
    }

    public function websiteupdate(Request $request)
    {
      $id = $request->get('id');
      $title = $request->get('editweb_title');
      $icon_name = $request->get('editicon_name');
      $description = $request->get('editweb_description');

        Website::findOrFail($id)->update([
          'title'=>$title,
          'icon_name'=>$icon_name,
          'description'=>$description
        ]);
    }

}
