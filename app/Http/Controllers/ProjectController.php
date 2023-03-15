<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ApprovedProject;
use App\Models\RejectedProject;
use App\Models\Image;
use Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\input;

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


            $title_image = request()->file('image')->getClientOriginalName();
            $extension  = request()->file('image')->getClientOriginalExtension(); 
            $image_name = time() .'_'. '.' . $extension;



            $path = $request->file('image')->storeAs(
                'images',
                $image_name,
                's3'
            );




            $banner_name = request()->file('banner')->getClientOriginalName();
            $extension  = request()->file('banner')->getClientOriginalExtension(); 
            $image_name = time() .'_'. '.' .$extension;
            $path2 = $request->file('banner')->storeAs(
                'images',
                $image_name,
                's3'
            );





            Image::create([
                'title' => $title_image,
                'project_name'=>$request->projectName,
                'founder_name'=>$request->founderName,
                'founder_email'=>$request->founderEmail,
                'founder_phone'=>$request->founderPhone,
                'image'=>$path,
                'banner'=>$path2,
                'banner_title'=>$banner_name,
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
        $proj->status = $request->status;
        $proj->path_image = $path;
        $proj->path_banner = $path2;

        $proj->save();

        return view('include.views.project.success');
        //return redirect()->back()->with('success', 'Project Data Has Been Inserted Successfuly:');
    }

    public function requests()
    {
        $projects = Project::all();
        return view('layouts/template/include/layout/requests', compact('projects'));
    }


    public function approved(Request $request)
    {
        $prev_id = $request->input('id');

        $approved = DB::table("projects")->select('*')->where('id', '=', $prev_id)->get();
        $result = $approved->toArray();

        //var_dump($res);

        $id = $request->session()->put('id', $request->id);
        
        return view('layouts.template.include.layout.approved', compact('result','id'));

    }


    public function approved_submit(Request $request)
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

        $proj = new ApprovedProject;

        $proj->project_name = $request->projectName;
        $proj->proj_chain = $request->projectChain;
        $proj->total_supply = $request->totalSupply;
        $proj->proj_description = $request->projectDesc;
        $proj->twitter = $request->twitter;
        $proj->discord = $request->discord;
        $proj->url = $request->url;
        $proj->time_zone = $request->timeZone;
        $proj->pre_sale_date = $request->preDate;
        $proj->pre_sale_time = $request->preTime;
        $proj->pre_sale_price  = $request->prePrice;
        $proj->date = $request->date;
        $proj->time = $request->time;
        $proj->price = $request->price;
        $proj->founder_name = $request->founderName;
        $proj->founder_email = $request->founderEmail;
        $proj->founder_phone = $request->founderPhone;

        $proj->save();

        return view('layouts/template/include/layout/master');

    }

    public function view_approved_proj(Request $request)
    {
        $projects = ApprovedProject::all();
        return view('layouts/template/include/layout/published', compact('projects'));
    }


    public function rejected(Request $request)
    {
        $prev_id = $request->input('id');

        $approved = DB::table("projects")->select('*')->where('id', '=', $prev_id)->get();
        $result = $approved->toArray();

        //var_dump($res);

        $id = $request->session()->put('id', $request->id);
        
        return view('layouts.template.include.layout.rejected', compact('result','id'));

    }


    public function rejected_submit(Request $request)
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

        $proj = new RejectedProject;

        $proj->project_name = $request->projectName;
        $proj->proj_chain = $request->projectChain;
        $proj->total_supply = $request->totalSupply;
        $proj->proj_description = $request->projectDesc;
        $proj->twitter = $request->twitter;
        $proj->discord = $request->discord;
        $proj->url = $request->url;
        $proj->time_zone = $request->timeZone;
        $proj->pre_sale_date = $request->preDate;
        $proj->pre_sale_time = $request->preTime;
        $proj->pre_sale_price  = $request->prePrice;
        $proj->date = $request->date;
        $proj->time = $request->time;
        $proj->price = $request->price;
        $proj->founder_name = $request->founderName;
        $proj->founder_email = $request->founderEmail;
        $proj->founder_phone = $request->founderPhone;

        $proj->save();

        return view('layouts/template/include/layout/master');
    }
    

    public function view_rejected_proj(Request $request)
    {
        $projects = RejectedProject::all();
        return view('layouts/template/include/layout/offline', compact('projects'));
    }


    // public function enum(Request $request)
    // {
    //     $status = $request->input('status');
    //     $db_status = DB::table("projects")->select('*')->where('status', '=', $status)->get();
    //     $result = $db_status->toArray();

    // }


    public function project_requests(Request $request)
    {
        $requests = DB::table("projects")->select('*')->where('status', '=', 'Pending')->get();
        $projects = $requests->toArray();

        return view('layouts/template/include/layout/requests', compact('projects'));

    }


    public function project_approved(Request $request)
    {
        $approved = DB::table("projects")->select('*')->where('status', '=', 'Approved')->get();
        $projects = $approved->toArray();

        return view('layouts/template/include/layout/published', compact('projects'));
        
    }

    public function project_rejected(Request $request)
    {
        $approved = DB::table("projects")->select('*')->where('status', '=', 'Rejected')->get();
        $projects = $approved->toArray();

        return view('layouts/template/include/layout/offline', compact('projects'));
        
    }

    public function status_update_approved(Request $request)
    {
        $prev_id = $request->input('id');

        $update = DB::table("projects")->select('*')->where('id', '=', $prev_id)->update(['status' => 'Approved']);

        $updated_rec = DB::table("projects")->select('*')->where('status', '=', 'Rejected')->get();

        $projects = $updated_rec->toArray();
        //$projects = $status->toArray();

        // echo "offline";


        
        return view('layouts/template/include/layout/requests', compact('projects'));
    }

    public function status_update_rejected(Request $request)
    {
        $prev_id = $request->input('id');

        $update = DB::table("projects")->select('*')->where('id', '=', $prev_id)->update(['status' => 'Rejected']);

        $updated_rec = DB::table("projects")->select('*')->where('status', '=', 'Approved')->get();

        $projects = $updated_rec->toArray();
        //$projects = $status->toArray();

        // echo "published";
        return view('layouts/template/include/layout/requests', compact('projects'));
    }

}
