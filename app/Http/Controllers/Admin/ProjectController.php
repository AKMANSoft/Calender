<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($status)
    {
        $projects = Project::where('status', $status)->get();
        return view('adminpanel.pages.projects.index', compact('projects', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $categories = ProjectCategory::all();
        return view('adminpanel.pages.projects.edit', compact('project', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        if($request->ajax()){
            $project->status = $request->status;
            $project->save();
            return response()->json(['success' => 'Status successfully updated !']);

        } else {
            $request->validate([
                'name' => 'required|string',
                'project_category_id' => 'required',
                'chain' => 'nullable',
                'total_supply' => 'required',
                'description' => 'required',
                'twitter_link' => 'nullable|url',
                'discord_link' => 'nullable|url',
                'website_link' => 'nullable|url',
                'profile_image_path' => 'nullable|file',
                'banner_image_path' => 'nullable|file',
                'pre_sale_timezone' => 'required',
                'pre_sale_date' => 'nullable',
                'pre_sale_time' => 'nullable',
                'pre_sale_price' => 'nullable',
                'mint_date' => 'required',
                'mint_time' => 'required',
                'mint_price' => 'required',
                'founder_name' => 'nullable',
                'founder_email' => 'required',
                'founder_phone' => 'nullable',
            ]);

            $inputs = $request->except(['_method', '_token']);

            if($request->hasFile('profile_image_path')){
                $profileImage = $request->file('profile_image_path');
                $profileImagePath = $profileImage->store('images/projects', 'public');
                $inputs['profile_image_path'] = $profileImagePath;
            } else {
                unset($inputs['profile_image_path']);
            }

            if($request->hasFile('banner_image_path')){
                $bannerImage = $request->file('banner_image_path');
                $bannerImagePath = $bannerImage->store('images/projects', 'public');
                $inputs['banner_image_path'] = $bannerImagePath;
            } else {
                unset($inputs['banner_image_path']);
            }

            if($request->has('is_super_featured')){
                $inputs['is_super_featured'] = $request->input('is_super_featured') == "on" ? true : false;
            }
            if($request->has('is_featured')){
                $inputs['is_featured'] = $request->input('is_featured') == "on" ? true : false;
            }
            if($request->has('is_link_verified')){
                $inputs['is_link_verified'] = $request->input('is_link_verified') == "on" ? true : false;
            }
            if($request->has('is_dooxed_kyc_verified')){
                $inputs['is_dooxed_kyc_verified'] = $request->input('is_dooxed_kyc_verified') == "on" ? true : false;
            }

            $inputs['mint_time'] = Carbon::createFromFormat('Y-m-d H:i', $inputs['mint_date']. ' ' . $inputs['mint_time']);
            $inputs['pre_sale_time'] = Carbon::createFromFormat('Y-m-d H:i', $inputs['pre_sale_date']. ' ' . $inputs['pre_sale_time']);

            Project::where('id', $project->id)->update($inputs);

            return redirect()->back()->with(['Success'=>'Successfully updated !']);

        }
    }

    public function updateOnToogle(Request $request, Project $project)
    {
        if ($request->ajax()) {
            $button = $request->button;
            switch ($button) {
                case 'super-featured':
                    if($project->is_super_featured){
                        $project->is_super_featured = false;
                    } else {
                        $project->is_super_featured = true;
                    }
                    break;
                case 'featured':
                    if($project->is_featured){
                        $project->is_featured = false;
                    } else {
                        $project->is_featured = true;
                    }
                    break;
                case 'link-verified':
                    if($project->is_link_verified){
                        $project->is_link_verified = false;
                    } else {
                        $project->is_link_verified = true;
                    }
                    break;
                case 'kyc-verified':
                    if($project->is_dooxed_kyc_verified){
                        $project->is_dooxed_kyc_verified = false;
                    } else {
                        $project->is_dooxed_kyc_verified = true;
                    }
                    break;
                default:
                    if($project->is_super_featured){
                        $project->is_super_featured = false;
                    } else {
                        $project->is_super_featured = true;
                    }
                    break;
            }
            $project->save();
            return response()->json(['success' => 'Status successfully updated !']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
