<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //

    public function index()
    {
        //echo "index";
        return view('include.views.project.create');
    }

    public function create(Request $request)
    {
        //echo "i am here";
        //return view('inlcude.views.project.create');

        $validateData = $request->validate([
            'projectName' => 'required',
        ]);

        $proj = new Project();

        //$projectName = $request->input('projectName');

        $proj->project_name = $request->projectName;
        $proj->proj_chain = $request->projectChain;
        $proj->total_supply = $request->totalSupply;
        $proj->proj_description = $request->projectDesc;
        $proj->twitter = $request->twitter;
        $proj->discord = $request->discord;
        $proj->url = $request->url;
        // $proj->profile_img = $request->profileImg;
        // $proj->banner_img = $request->bannerImg;
        $proj->time_zone = $request->timeZone;
        $proj->pre_sale_date = $request->preSaleDate;
        $proj->pre_sale_time = $request->preSaleTime;
        $proj->pre_sale_price  = $request->preSalePrice;
        $proj->date = $request->date;
        $proj->time = $request->time;
        $proj->price = $request->price;
        $proj->founder_name = $request->founderName;
        $proj->founder_email = $request->founderEmail;
        $proj->founder_phone = $request->founderPhone;

        $proj->save();

        return redirect()->back()->with('success', 'Project Data Has Been Inserted Successfuly:');
    }

}
