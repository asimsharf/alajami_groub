<?php

namespace App\Http\Controllers;

use App\Company;
use App\Model\Branch;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies=Company::all();
        return view('multiauth::admin.cpanel_forms.show_company',compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('multiauth::admin.cpanel_forms.create_company');
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
            'address' => ['required', 'max:255'],
            'phone' => ['required'],
            'email' => ['required','email'],
            'short_intro' => ['required'],
            'publication_status'=> ['required'],
          
        ],
        $messages = [
            'name.required' => 'يجب ادخال اسم الشركه',
            'address.required' => 'يجب ادخال اسم عنوان الشركه',
            'phone.required' => 'يجب ادخال رقم الهاتف',
            'email.required' => 'يجب ادخال البريد الاكتروني للشركه',
            'short_intro.required' => 'يجب ادخال نبذه عن الشركه',
        ]
        );
        $company=new Company();
        $company->company_url=$request->company_url;
        // $filename=$request->file('logo');
       
        if($file=$request->file('logo')){
           
            $name=$file->getClientOriginalName();
            $file->move('upload',$name);
            $company->logo = 'upload/'.$name ;  
           
        }
        if($file=$request->file('profile')){
            
            $name=$file->getClientOriginalName();
            $file->move('upload',$name);
            $company->profile = 'upload/'.$name ;  
           
        }
        $company->fill($validatedData);
       
        $save=$company->save();
        if( $save) {
            return redirect('/show_company')->with('success', 'تمت عمليه الإضافه بنجاح');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('multiauth::admin.cpanel_forms.edit_company',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $update=$company->update($request->all());
        if( $update){
            return redirect('/show_company')->with('success', 'تمت عمليه التعديل بنجاح');
        }else{
            return 404;
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        Branch::where('company_id',$company->id)->delete();
        $delete= $company->delete();
        if( $delete){
            return redirect('/show_company')->with('success', 'تمت عمليه الحذف بنجاح');
        }else{
            return 404;
        }
    }
}
