<?php

namespace App\Http\Controllers;

use App\Model\AjamiResume;
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
        $resums=AjamiResume::all();
      
        return view('multiauth::admin.cpanel_forms.show_resume',compact('resums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('multiauth::admin.cpanel_forms.update_resume');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:255'],
            'fb_link' => ['required', 'max:255'],
            'phone' => ['required'],
            'email' => ['required','email'],
            'short_intro' => ['required'],
            'tw_link'=> ['required'],
            'linkin'=> ['required'],
            'educational_life'=> ['required'],
            'life_mission'=> ['required'],
            'life_vision'=> ['required'],
          
        ],
        $messages = [
            'name.required' => 'يجب ادخال الاسم ',
            'fb_link.required' => 'يجب ادخال حساب  فيسبوك ',
            'tw_link.required' => 'يجب ادخال حساب  تويتر ',
            'linkin.required' => 'يجب ادخال حساب  موقع ذو صله ',
            'phone.required' => 'يجب ادخال رقم الهاتف',
            'email.required' => 'يجب ادخال البريد الاكتروني ',
            'short_intro.required' => 'يجب ادخال نبذه عن ',
            'educational_life.required'=> 'ادخل نبذه عن الحياة التعلميه',
            'life_mission.required'=> 'ادخل الرؤيه',
            'life_vision.required'=> 'ادخل الرساله',
        ]
        );
        
        $cv=AjamiResume::firstOrNew(array(
            'id'=>1
        ));
        
        if($file=$request->file('image')){
            $name=$file->getClientOriginalName();
            $file->move('upload',$name);
            $cv->image = 'upload/'.$name ;  
           
        }
        $cv->fill($validatedData);
    
        $save=$cv->save();
        if( $save){
            return redirect('/show_resume')->with('success', 'تمت عمليه الإضافه بنجاح');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AjamiResume  $ajamiResume
     * @return \Illuminate\Http\Response
     */
    public function show(AjamiResume $ajamiResume)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AjamiResume  $ajamiResume
     * @return \Illuminate\Http\Response
     */
    public function edit(AjamiResume $ajamiResume)
    {
      //
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
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AjamiResume  $ajamiResume
     * @return \Illuminate\Http\Response
     */
    public function destroy(AjamiResume $ajamiResume)
    {
        $delete=$ajamiResume->delete();
        if($delete){

            return redirect('/show_resume')->with('success', 'تمت عمليه الحذف بنجاح');

        }
    }
}
