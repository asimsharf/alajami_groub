@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>شاشه تعديل بيانات الشركه</h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
  
  </ol>
</section>


<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">تعديل شركة </h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">

<form role="form" action="{{ url('/upadte_company/'.$company->id) }}" method="post">
    @method('PATCH')
    {{ csrf_field() }}
    <div class="box-body">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <label for="ar_name">إسم الشركة</label>
                    <input class="form-control" placeholder="إسم الشركة..." type="text" name="name" maxlength="30" value="{{$company->name}}" >
                </div>
            </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label for="ar_name">عنوان الشركة</label>
                    <input class="form-control" placeholder="عنوان الشركة..." type="text" name="address" maxlength="30" value="{{$company->address}}">
                </div>
            </div>





            <div class="col-sm-2">
                <div class="form-group">
                    <label for="ar_name">الهاتف </label>
                    <input class="form-control" placeholder="العنوان..." type="text" name="phone" maxlength="30" value="{{$company->phone}}">
                </div>
            </div>



            <div class="col-sm-2">
                <div class="form-group">
                    <label for="ar_name">البريد الإلكتروني </label>
                    <input class="form-control" placeholder="العنوان..." type="text" name="email" maxlength="30" value="{{$company->email}}">
                </div>
            </div>


            <div class="form-group col-sm-2">
          <label for="publication_status">حالة النشر </label>
          <select class="form-control" name="publication_status" value="{{old('publication_status')}}">
            <option value="1" {{ $company -> publication_status == 1 ? 'selected' : '' }}>مفعل  </option>
            <option value="0" {{ $company-> publication_status == 0 ? 'selected' : '' }}>غير مفعل </option>
          </select>
      </div>

            <div class="col-sm-2">
                <div class="form-group">
                    <label for="ar_name">الموقع الإلكتروني </label>
                    <input class="form-control" placeholder="الموقع الإلكتروني..." type="text" name="company_url" maxlength="30" value="{{$company->company_url}}">
                </div>
            </div>


        


            <!-- <div class="col-sm-6">
                <div class="form-group">
                    <label for="ar_name">الخدمات </label>

                    <select  placeholder="الخدمات..."  class="js-example-basic-multiple form-control" name="services_id" multiple="multiple">
                        <option value="1">خدمة بحري</option>
                        <option value="2">خدمة الجيزة</option>
                        <option value="3">خدمة الطائف</option>
                        <option value="4">خدمة بحري</option>
                        <option value="5">خدمة الجيزة</option>
                        <option value="6">خدمة الطائف</option>
                    </select>
                </div>
            </div> -->






            <!-- <div class="col-sm-6">
                <div class="form-group">
                    <label for="ar_name">مجالات الشركة </label>

                    <select  placeholder="المجالات..."  class="js-example-basic-multiple form-control" name="fields_id" multiple="multiple">
                        <option value="1">خدمة المجالات</option>
                        <option value="2">المجالات الجيزة</option>
                        <option value="3">المجالات الطائف</option>
                        <option value="4">المجالات بحري</option>
                        <option value="5">المجالات الجيزة</option>
                        <option value="6">المجالات الطائف</option>
                    </select>
                </div>
            </div> -->



            <div class="col-sm-6">
                <div class="form-group">
                    <label for="en_name">نبذه عن الشركة</label>
                    <textarea class="form-control" placeholder="نبذه عن الشركة" maxlength="500" name="short_intro" value="">{{ $company ->short_intro}}</textarea>
                </div>
            </div>



            <!-- <div class="col-sm-6">
                <div class="form-group">
                    <label for="ar_name">صفحة الفيسبوك </label>
                    <input class="form-control" placeholder="العنوان..." type="text" name="facebook" maxlength="30" value="{{old('')}}">
                </div>
            </div>



            <div class="col-sm-6">
                <div class="form-group">
                    <label for="ar_name">صفحة تويتر </label>
                    <input class="form-control" placeholder="العنوان..." type="text" name="twitter" maxlength="30" value="{{old('')}}">
                </div>
            </div> -->


          
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary"> تعديل</button>
    </div>
</form>

</div>
</div>
@include('sweetalert::alert')
</section>



@endsection
