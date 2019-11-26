<?php

namespace App\Http\Controllers;

use App\AjamiResume;
use Illuminate\Http\Request;

class AjamiResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AjamiResume  $ajamiResume
     * @return \Illuminate\Http\Response
     */
    public function show(AjamiResume $ajamiResume)
    {
        return view('multiauth::admin.cpanel_forms.show_resume');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AjamiResume  $ajamiResume
     * @return \Illuminate\Http\Response
     */
    public function edit(AjamiResume $ajamiResume)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AjamiResume  $ajamiResume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AjamiResume $ajamiResume)
    {
        return view('multiauth::admin.cpanel_forms.update_resume');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AjamiResume  $ajamiResume
     * @return \Illuminate\Http\Response
     */
    public function destroy(AjamiResume $ajamiResume)
    {
        //
    }
}
