<?php

namespace App\Http\Controllers;

use App\Events\ProjectCreated;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Project;
use App\Models\ProjectCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function search(Request $request)
    {
        $response = Http::withToken(config('services.twitter.token'))
            ->get("https://api.twitter.com/2/users/by/username/mianham22846878", [
            'user.fields'=>'description',
        ]);

        if($response->successful()){
            
        } else {
            Log::error('Twiiter API not working.');
        }

        $request->validate([
            'keyword' => 'required'
        ]);

        $keyword = $request->keyword;

        $projects = Project::where('status', 'published')->where('name', 'like', '%' . $keyword . '%')
            ->orderBy('id', 'ASC')->paginate(14);

        return view('pages.projects.search', compact('projects', 'keyword'));
    }

    /**
     * Display a listing of the resource.
     */
    public function index($category, $chain = 'all')
    {
        $projectCategory = null;
        if ($chain != 'all') {
            $projectCategory = ProjectCategory::where('slug', $chain)->get()->first();
        }
        $projectsPerPage = 14;
        switch ($category) {
            case 'today':
                $projects = Project::where('status', 'published')->where('mint_time', '<=', Carbon::now()->endOfDay())
                    ->when($chain != 'all', function ($query) use ($projectCategory) {
                        return $query->where('project_category_id', $projectCategory->id);
                    })
                    ->orderBy('id', 'ASC')->paginate($projectsPerPage);
                break;
            case 'most popular':
                $projects = Project::where('status', 'published')
                    ->when($chain != 'all', function ($query) use ($projectCategory) {
                        return $query->where('project_category_id', $projectCategory->id);
                    })
                    ->orderBy('page_views', 'DESC')->paginate($projectsPerPage);
                break;
            case 'verified':
                $projects = Project::where('status', 'published')->where('is_link_verified', true)
                    ->when($chain != 'all', function ($query) use ($projectCategory) {
                        return $query->where('project_category_id', $projectCategory->id);
                    })
                    ->orderBy('id', 'ASC')->paginate($projectsPerPage);
                break;
            case 'upcoming':
                $projects = Project::where('mint_time', '>=', Carbon::now())->where('status', 'published')->orderBy('id', 'ASC')
                    ->when($chain != 'all', function ($query) use ($projectCategory) {
                        return $query->where('project_category_id', $projectCategory->id);
                    })
                    ->orderBy('id', 'ASC')
                    ->paginate($projectsPerPage);
                break;
            case 'featured':
                $projects = Project::where('status', 'published')->where('is_featured', true)
                    ->when($chain != 'all', function ($query) use ($projectCategory) {
                        return $query->where('project_category_id', $projectCategory->id);
                    })
                    ->orderBy('id', 'ASC')->paginate($projectsPerPage);
                break;
            case 'minting soon':
                $projects = Project::where('status', 'published')->where('mint_time', '>=', Carbon::now())
                    ->where('mint_time', '<=', Carbon::now()->addWeek(1))
                    ->when($chain != 'all', function ($query) use ($projectCategory) {
                        return $query->where('project_category_id', $projectCategory->id);
                    })
                    ->orderBy('id', 'ASC')->paginate($projectsPerPage);
                break;
            case 'recently closed':
                $projects = Project::where('status', 'published')->where('mint_time', '<', Carbon::now())
                    ->when($chain != 'all', function ($query) use ($projectCategory) {
                        return $query->where('project_category_id', $projectCategory->id);
                    })
                    ->orderBy('id', 'ASC')->paginate($projectsPerPage);
                break;

            default:
                $projects = Project::where('status', 'published')->orderBy('id', 'ASC')->paginate($projectsPerPage);
                break;
        }
        // return $projects;
        return view('pages.projects.index', compact('projects', 'category', 'chain'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = ProjectCategory::all();
        return view('pages.projects.create', compact('categories'));
    }

    /**
     * Show the success page.
     */
    public function success()
    {
        return view('pages.projects.success');
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
        if ($request->hasFile('banner_image_path')) {
            $profileImage = $request->file('banner_image_path');
            $profileImagePath = $profileImage->store('images/projects', 'public');
            $inputs['banner_image_path'] = $profileImagePath;
        }

        $inputs['mint_time'] = Carbon::createFromFormat('Y-m-d H:i', $inputs['mint_date'] . ' ' . $inputs['mint_time']);
        $inputs['pre_sale_time'] = Carbon::createFromFormat('Y-m-d H:i', $inputs['pre_sale_date'] . ' ' . $inputs['pre_sale_time']);

        $project = Project::create($inputs);

        ProjectCreated::dispatch($project);

        return redirect()->route('projects.success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, Project $project)
    {
        if($project->status == 'published'){
            $featuredProjects = Project::where('is_featured', true)->where('status', 'published')->orderBy('id', 'ASC')->get()->take(6);
            $mintingSoonProjects = Project::where('status', 'published')->where('mint_time', '>=', Carbon::now())
                ->where('mint_time', '<=', Carbon::now()->addWeek(1))
                ->orderBy('id', 'ASC')->get()->take(6);

            $cookie_name = (Str::replace('.', '', ($request->ip())) . '-' . $project->id);
            if (Cookie::get($cookie_name) == '') {
                $cookie = cookie($cookie_name, '1', 60); //set the cookie
                $currentViews = $project->page_views;
                $project->page_views = $currentViews + 1;
                $project->save();
                return response()->view('pages.projects.show', compact('project', 'featuredProjects', 'mintingSoonProjects'))
                    ->withCookie($cookie);
            }


            return view('pages.projects.show', compact('project', 'featuredProjects', 'mintingSoonProjects'));
        } else {
            abort(404);
        }
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
        if ($request->ajax()) {
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

            $inputs = $request->except(['_method', '_token']);

            if ($request->hasFile('profile_image_path')) {
                $profileImage = $request->file('profile_image_path');
                $profileImagePath = $profileImage->store('images/projects', 'public');
                $inputs['profile_image_path'] = $profileImagePath;
            } else {
                unset($inputs['profile_image_path']);
            }

            if ($request->hasFile('banner_image_path')) {
                $bannerImage = $request->file('banner_image_path');
                $bannerImagePath = $bannerImage->store('images/projects', 'public');
                $inputs['banner_image_path'] = $bannerImagePath;
            } else {
                unset($inputs['banner_image_path']);
            }

            if ($request->has('is_super_featured')) {
                $inputs['is_super_featured'] = $request->input('is_super_featured') == "on" ? true : false;
            }
            if ($request->has('is_featured')) {
                $inputs['is_featured'] = $request->input('is_featured') == "on" ? true : false;
            }
            if ($request->has('is_link_verified')) {
                $inputs['is_link_verified'] = $request->input('is_link_verified') == "on" ? true : false;
            }
            if ($request->has('is_dooxed_kyc_verified')) {
                $inputs['is_dooxed_kyc_verified'] = $request->input('is_dooxed_kyc_verified') == "on" ? true : false;
            }

            $inputs['mint_time'] = Carbon::createFromFormat('Y-m-d H:i', $inputs['mint_date'] . ' ' . $inputs['mint_time']);
            $inputs['pre_sale_time'] = Carbon::createFromFormat('Y-m-d H:i', $inputs['pre_sale_date'] . ' ' . $inputs['pre_sale_time']);

            Project::where('id', $project->id)->update($inputs);

            return redirect()->back()->with(['Success' => 'Successfully updated !']);
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
