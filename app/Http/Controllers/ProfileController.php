<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;

class ProfileController extends Controller
{
    //
    public function index(Request $request)
    {

        $prev_id = $request->input('id');

        $data_profile = DB::table('projects')->select('*')->where('id', '=', $prev_id)->get();

        $result = $data_profile->toArray();

        var_dump($result);
        
        //return view('layouts.template.include.layout.profile', compact('result'));

        //return view('layouts.template.include.layout.profile');
    }
}
