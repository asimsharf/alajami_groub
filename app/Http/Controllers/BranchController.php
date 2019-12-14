<?php

namespace App\Http\Controllers;

use App\Model\Branch;
use App\Model\Company;
use Illuminate\Http\Request;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $branchs=Branch::all();
        return view('multiauth::admin.cpanel_forms.show_branch',compact('branchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $copmanies=Company::all();
        return view('multiauth::admin.cpanel_forms.create_branch',compact('copmanies'));
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
            'adress' => ['required', 'max:255'],
            'phone' => ['required'],
            'email' => ['required','email'],
            'short_intro' => ['required'],
            'company_id'=> ['required'],
          
        ],
        $messages = [
            'name.required' => 'يجب ادخال اسم الفرع',
            'address.required' => 'يجب ادخال اسم عنوان الفرع',
            'phone.required' => 'يجب ادخال رقم الهاتف',
            'email.required' => 'يجب ادخال البريد الاكتروني للفرع',
            'short_intro.required' => 'يجب ادخال نبذه عن الفرع',
        ]
        );
        $branch=new Branch();
       
        // $filename=$request->file('logo');
       
        if($file=$request->file('img')){
           
            $name=$file->getClientOriginalName();
            $file->move('upload',$name);
            $branch->img = 'upload/'.$name ;  
           
        }
         $branch->fill($validatedData);
        $save= $branch->save();
        if( $save) {
            return redirect('/show_branch')->with('success', 'تمت عمليه الإضافه بنجاح');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function show(Branch $branch)
    {
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function edit(Branch $branch)
    {
        $copmanies=Company::all();
        return view('multiauth::admin.cpanel_forms.edit_branch',compact('branch','copmanies'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Branch $branch)
    {
        $update=$branch->update($request->all());
        if( $update){
            return redirect('/show_branch')->with('success', 'تمت عمليه التعديل بنجاح');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Branch  $branch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $dalate=$branch->delete();
        if( $dalate){
            return redirect('/show_branch')->with('success', 'تمت عمليه الحذف  بنجاح');
        }
    }
}
