@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
 افراع شركات العجمي
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#"> الافرع</a></li>
    <li class="active">إضافة  </li>
  </ol>
</section>


<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">إضافة فرع جديد</h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">

<form role="form" action="{{ url('/save_branch') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
    <div class="box-body">

        <div class="form-group col-md-4">
          <label for="en_name">إسم  الفرع</label>
          <input class="form-control" placeholder="إسم  الفرع..." type="text" name="name" maxlength="30" value="{{old('name')}}">
        </div>



        <div class="form-group col-md-4">
          <label for="en_name"> العنوان</label>
          <input class="form-control" placeholder=" العنوان ..." type="text" name="adress" maxlength="30" value="{{old('adress')}}">
        </div>


  



        <div class="form-group col-md-4">
          <label for="en_name"> الهاتف</label>
          <input class="form-control" placeholder=" رقم الهاتف" type="text" name="phone" maxlength="30" value="{{old('phone')}}">
        </div>


        <div class="form-group col-md-4">
          <label for="en_name"> البريد</label>
          <input class="form-control" placeholder="البريد الاكتروني" type="text" name="email" maxlength="30" value="{{old('email')}}">
        </div>



        


        <div class="col-sm-6">
                <div class="form-group">
                    <label for="ar_name">الشركه التابعه </label>

                    <select class="form-control form-control-sm" name="company_id" style="height: 40px;">
                      @foreach($copmanies as $copmany)
                        <option value="{{$copmany->id}}" >{{$copmany->name}} </option>
                      @endforeach
                  </select>
                </div>
            </div>



        <div class="form-group col-md-6">
            <label for="ar_name">نبذه عن الفرع</label>
            <textarea class="form-control" placeholder="نبذه عن الشركة" maxlength="500" name="short_intro" >{{old('short_intro')}}</textarea>
          </div>



            <div class="form-group col-md-1">
              <label> صورة الفرع</label>
              <input type="file" class="form-control input_file_choose"  id="input_file_choose" name="img"/>
            </div>



            <div class="form-group col-md-3">
                 <img id="input_image_selected_show" border="0" width="100%" height="200px" src="{{URL('backend/dist/img/person.jpg')}}" />
            </div>



    </div>

      <div class="box-footer">
         <button type="submit" class="btn btn-primary">إضافة </button>
      </div>

</form>

    </div>
    </div>

    @include('sweetalert::alert')

    </section>


@endsection
