<?php

namespace App\Http\Controllers;

use App\CustomClass\MemberDate;
use App\CustomClass\ProjectData;
use App\CustomClass\PartnerData;
use App\CustomClass\FeedbackData;
use App\Member;
use App\Project;
use App\Feedback;
use App\Partnercompany;
use App\About;
use App\Training;
use App\Markting;
use App\Website;
use App\WebDesign;
use Illuminate\Http\Request;

class UIController extends Controller
{
    public function index()
    {
        $projects=Project::orderBy('id', 'desc')->limit(4)->get();
        $project_arr=[];
        foreach ($projects as $data){
            $project_data=new ProjectData($data->id);
            array_push($project_arr,$project_data->getProjectData());
        }

        $partner=Partnercompany::orderBy('id', 'desc')->get();
        $partner_arr=[];
        foreach ($partner as $data){
            $partner_data=new PartnerData($data->id);
            array_push($partner_arr,$partner_data->getPartnerData());
        }

        $feedback=Feedback::orderBy('id', 'desc')->get();
        $feedback_arr=[];
        foreach ($feedback as $data){
            $feedback_data=new FeedbackData($data->id);
            array_push($feedback_arr,$feedback_data->getFeedbackData());
        }

        return view('user.index')->with([
            'url' => 'index',
            'projects'=>$project_arr,
            'partners'=>$partner_arr,
            'feedbacks'=>$feedback_arr
        ]);
    }
    public function about()
    {
        $about = About::all();

        $members=Member::paginate(6);
        $member_arr=[];
        foreach ($members as $data){
            $member_data=new MemberDate($data->id);
            array_push($member_arr,$member_data->getMemberData());
        }

        return view('user.about')->with([
            'url' => 'about',
            'members'=>$member_arr,
            'paginate_members'=>$members,
            'about' => $about
        ]);
    }

    public function training()
    {
        $training = Training::all();

        return view('user.training')->with([
            'url' => 'training',
            'training'=>$training
        ]);
    }

    public function seo()
    {
        $markting = Markting::all();
        
        return view('user.seo')->with([
            'url' => 'seo',
            'markting'=>$markting
        ]);
    }

    public function our_project()
    {
        return view('user.our_project')->with([
            'url' => 'our_project'
        ]);
    }

    public function our_website()
    {
        $web_design = WebDesign::all();
        $website = Website::all();
        
        return view('user.our_website')->with([
            'url' => 'our_website',
            'web_design'=>$web_design,
            'website'=>$website
        ]);
    }

    public function software()
    {
        return view('user.software')->with([
            'url' => 'software'
        ]);
    }

    public function contact()
    {
        return view('user.contact')->with([
            'url' => 'contact'
        ]);
    }
}
