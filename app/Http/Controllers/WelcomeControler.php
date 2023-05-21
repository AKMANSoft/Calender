<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\News;
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
        try {
            $news = News::select('posts2.guid as image_link', 'wp_f00d214522_posts.post_content', 'wp_f00d214522_posts.post_title', 'wp_f00d214522_posts.post_name', 'wp_f00d214522_posts.post_excerpt', 'wp_f00d214522_posts.guid', 'meta_value')
            ->join('wp_f00d214522_postmeta', 'wp_f00d214522_postmeta.post_id', '=', 'wp_f00d214522_posts.id')
            ->join('wp_f00d214522_posts AS posts2', 'meta_value', '=', 'posts2.id')
            ->where('wp_f00d214522_posts.post_type', 'post')->where('meta_key', '_thumbnail_id')
            ->orderBy('wp_f00d214522_posts.id', 'DESC')->get()->take(4);
        } catch (\Throwable $th) {
            $news = [];
        }
        return view('pages.index', compact('superFeaturedProjects', 'featuredProjects', 'popularProjects', 'verifiedProjects', 'upcomingProjects', 'news'));
    }
}
