@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
 شاشه التعديلات على فروع الشركات
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
   
  </ol>
</section>


<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">تعديل الافرع </h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">

<form role="form" action="{{ url('/update_branch/'.$branch->id) }}" enctype="multipart/form-data" method="post">
        @method('PATCH')
        {{ csrf_field() }}
    <div class="box-body">

        <div class="form-group col-md-4">
          <label for="en_name">إسم  الفرع</label>
          <input class="form-control" placeholder="إسم  الفرع..." type="text" name="name" maxlength="30" value="{{$branch->name}}">
        </div>



        <div class="form-group col-md-4">
          <label for="en_name"> العنوان</label>
          <input class="form-control" placeholder=" العنوان ..." type="text" name="adress" maxlength="30" value="{{$branch->adress}}">
        </div>


  



        <div class="form-group col-md-4">
          <label for="en_name"> الهاتف</label>
          <input class="form-control" placeholder=" رقم الهاتف" type="text" name="phone" maxlength="30" value="{{$branch->phone}}">
        </div>


        <div class="form-group col-md-4">
          <label for="en_name"> البريد</label>
          <input class="form-control" placeholder="البريد الاكتروني" type="text" name="email" maxlength="30" value="{{$branch->email}}">
        </div>



        


        <div class="col-sm-6">
                <div class="form-group">
                    <label for="ar_name">الشركه التابعه </label>

                    <select class="form-control form-control-sm" name="company_id" style="height: 40px;">
                      @foreach($copmanies as $company)
                        <option value="{{$company->id}}" {{$company->id ==$branch->company_id? 'selected' : '' }}>{{$company->name}} </option>
                      @endforeach
                  </select>
                </div>
            </div>



        <div class="form-group col-md-6">
            <label for="ar_name">نبذه عن الفرع</label>
            <textarea class="form-control" placeholder="نبذه عن الشركة" maxlength="500" name="short_intro" >{{$branch->short_intro}}</textarea>
          </div>



          



    </div>

      <div class="box-footer">
         <button type="submit" class="btn btn-primary">تعديل </button>
      </div>

</form>

    </div>
    </div>

    @include('sweetalert::alert')

    </section>


@endsection
