<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $noOfRequestedProjects = Project::where('status', 'requested')->count();
        $noOfPublishedProjects = Project::where('status', 'published')->count();
        $noOfFeaturedProjects = Project::where('is_featured', true)->count();
        return view('adminpanel.pages.dashboard', compact('noOfRequestedProjects', 'noOfPublishedProjects', 'noOfFeaturedProjects'));
    }
}
