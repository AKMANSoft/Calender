<?php

namespace App\Http\Controllers\Admin;

use App\Models\EmailTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmailTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(EmailTemplate $emailTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $emailTemplate = EmailTemplate::find(1);
        if($emailTemplate) {
            return view('adminpanel.pages.email-template.edit', compact('emailTemplate'));
        } else {
            $emailTemplate = EmailTemplate::create([
                'name' => 'Project Submit',
                'data' => null
            ]);
            return view('adminpanel.pages.email-template.edit', compact('emailTemplate'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $emailTemplate = EmailTemplate::find(1);
        if($emailTemplate) {
            $emailTemplate->data = $request->data;
            $emailTemplate->save();
            return redirect()->back();
        } else {
            abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmailTemplate $emailTemplate)
    {
        //
    }
}
