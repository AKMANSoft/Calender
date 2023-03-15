<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\input;
use App\Models\Project;
use App\Models\Image;

class ProfileController extends Controller
{
    //
    public function index(Request $request)
    {

        $prev_id = $request->input('id');

        $data_profile = DB::table('projects')->select('*')->where('id', '=', $prev_id)->get();

        $result = $data_profile->toArray();

        // $project_name = Project::where('id', $prev_id)->pluck('project_name');

        // $project_name = $project_name->toArray();

        // $images = Image::where('project_name', $project_name)->pluck('image','banner');

        // $project_name_res = $project_name_img->toArray();

        // $images = $project_name_res;

        // var_dump($images);

        $id = $request->session()->put('id', $request->id);
        
        return view('layouts.template.include.layout.profile', compact('result','id'));

    }

    public function update(Request $request)
    {
        $prev_id = $request->input('id');

        $projectName = $request->input('projectName');
        $projectChain = $request->input('projectChain');
        $totalSupply = $request->input('totalSupply');
        $projectDesc = $request->input('projectDesc');
        $twitter = $request->input('twitter');
        $discord = $request->input('discord');
        $url = $request->input('url');
        $timeZone = $request->input('timeZone');
        $preDate = $request->input('preDate');
        $preTime = $request->input('preTime');
        $prePrice = $request->input('prePrice');
        $date = $request->input('date');
        $time = $request->input('time');
        $price = $request->input('price');
        $founderName = $request->input('founderName');
        $founderEmail = $request->input('founderEmail');
        $founderPhone = $request->input('founderPhone');
        

        DB::table('projects')->select('*')->where('id', '=', $prev_id)->update([
            'project_name' => $projectName,
            'proj_chain' => $projectChain,
            'total_supply' => $totalSupply,
            'proj_description' => $projectDesc,
            'twitter' => $twitter,
            'discord' => $discord,
            'url' => $url,
            'time_zone' => $timeZone,
            'pre_sale_date' => $preDate,
            'pre_sale_time' => $preTime,
            'pre_sale_price' => $prePrice,
            'date' => $date,
            'time' => $time,
            'price' => $price,
            'founder_name' => $founderName,
            'founder_email' => $founderEmail,
            'founder_phone' => $founderPhone
        ]);
        

        return view('layouts/template/include/layout/master');

    }
}
