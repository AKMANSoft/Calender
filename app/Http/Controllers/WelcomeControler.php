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
        $superFeaturedProjects = Project::where('is_super_featured', true)
            ->get()->take(6);

        $featuredProjects = Project::where('is_featured', true)->orderBy('id', 'ASC')->get()->take(6);
        $popularProjects = Project::where('is_featured', true)->orderBy('id', 'ASC')->get()->take(6);
        $verifiedProjects = Project::where('is_featured', true)->orderBy('id', 'ASC')->get()->take(6);
        
        $upcomingProjects = Project::where('is_featured', true)->orderBy('id', 'ASC')
            ->where('mint_time', '<=', Carbon::now()->addWeek(1))
            ->where('mint_time', '>=', Carbon::now())
            ->orderBy('id', 'ASC')
            ->get()->take(6);

        return view('pages.index', compact('featuredProjects', 'popularProjects', 'verifiedProjects', 'upcomingProjects'));
    }
}
