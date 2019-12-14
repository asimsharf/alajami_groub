<?php

namespace App\Http\Controllers;

use App\WorkField;
use Illuminate\Http\Request;

class WorkFieldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fields=WorkField::all();
        return view('multiauth::admin.cpanel_forms.show_fields',compact('fields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('multiauth::admin.cpanel_forms.create_fields');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $request->validate([
                'addmore.*.name' =>'required |min:3'
            ]);
            foreach ($request->addmore as $key => $value) {
                $catogry=new WorkField(); 
                $catogry->fill($value);  
                $catogry->save();
               
            }
            return redirect('/show_fields')->with('success', 'تمت إضافه المجالات بنجاح.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function show(WorkField $workField)
    {
        return view('multiauth::admin.cpanel_forms.show_fields');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkField $workField)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkField $workField)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkField  $workField
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkField $workField)
    {
        $delete=$workField->delete();
         if( $delete){
            return redirect('/show_fields')->with('success', 'تمت حذف المجال بنجاح.');

         }else return 404;
    }
}
