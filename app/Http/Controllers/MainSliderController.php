<?php

namespace App\Http\Controllers;

use App\MainSlider;
use Illuminate\Http\Request;

class MainSliderController extends Controller
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
        return view('multiauth::admin.cpanel_forms.create_slider');
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
     * @param  \App\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function show(MainSlider $mainSlider)
    {
        return view('multiauth::admin.cpanel_forms.show_slider');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function edit(MainSlider $mainSlider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainSlider $mainSlider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MainSlider  $mainSlider
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainSlider $mainSlider)
    {
        //
    }
}
