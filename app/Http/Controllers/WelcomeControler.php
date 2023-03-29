<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class WelcomeControler extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return Project::all()->first()->minting_status;
        $superFeaturedProjects = Project::where('is_super_featured', true)->where('status', 'published')
            ->orderBy('id', 'ASC')
            ->get()->take(3);

        $featuredProjects = Project::where('is_featured', true)->where('status', 'published')->orderBy('id', 'ASC')->get()->take(6);
        $popularProjects = Project::where('is_featured', true)->where('status', 'published')->orderBy('page_views', 'DESC')->get()->take(6);
        $verifiedProjects = Project::where('is_link_verified', true)->where('status', 'published')->orderBy('id', 'ASC')->get()->take(6);

        $upcomingProjects = Project::where('mint_time', '>=', Carbon::now())->where('status', 'published')->orderBy('id', 'ASC')
            // ->where('mint_time', '<=', Carbon::now()->addWeek(1))
            ->where('mint_time', '>=', Carbon::now())
            ->orderBy('id', 'ASC')
            ->get()->take(6);

        return view('pages.index', compact('superFeaturedProjects', 'featuredProjects', 'popularProjects', 'verifiedProjects', 'upcomingProjects'));
    }
}
