<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($status)
    {
        // return $status;
        $projects = Project::where('status', $status)->get();
        return view('adminpanel.pages.projects.index', compact('projects', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('include.views.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProjectRequest $request)
    {
        $inputs = $request->input();

        $profileImage = $request->file('profile_image_path');
        $profileImagePath = $profileImage->store('images/projects', 'public');
        $inputs['profile_image_path'] = $profileImagePath;
        if($request->hasFile('banner_image_path')){
            $profileImage = $request->file('banner_image_path');
            $profileImagePath = $profileImage->store('images/projects', 'public');
            $inputs['banner_image_path'] = $profileImagePath;
        }

        Project::create($inputs);

        return view('include.views.project.success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('adminpanel.pages.projects.edit', compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        //
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
                'chain' => 'required',
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

            return $inputs = $request->except(['_method', '_token']);

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

            Project::where('id', $project->id)->update($inputs);

            return redirect()->back()->with(['Success'=>'Successfully updated !']);

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
