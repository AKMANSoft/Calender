<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    //

    public function index()
    {

        return view('include.views.project.create');
    }

    public function create(Request $request)
    {

        $validateData = $request->validate([
            'projectName' => 'required',
            'projectChain' => 'required',
            'totalSupply' => 'required',
            'projectDesc' => 'required',
            'timeZone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'price' => 'required',
            'founderEmail' => 'required',
        ]);

        $proj = new Project;

        $proj->project_name = $request->projectName;
        $proj->proj_chain = $request->projectChain;
        $proj->total_supply = $request->totalSupply;
        $proj->proj_description = $request->projectDesc;
        $proj->twitter = $request->twitter;
        $proj->discord = $request->discord;
        $proj->url = $request->url;
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

        return view('include.views.project.success');
        //return redirect()->back()->with('success', 'Project Data Has Been Inserted Successfuly:');
    }

    public function requests()
    {
        $projects = Project::all();
        return view('layouts/template/include/layout/requests', compact('projects'));
    }

}
