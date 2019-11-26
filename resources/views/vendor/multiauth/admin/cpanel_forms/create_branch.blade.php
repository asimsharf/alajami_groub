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

<form role="form" action="{{ url('/save-product') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
    <div class="box-body">

        <div class="form-group col-md-4">
          <label for="en_name">إسم  الفرع</label>
          <input class="form-control" placeholder="إسم  الفرع..." type="text" name="name" maxlength="30" required>
        </div>



        <div class="form-group col-md-4">
          <label for="en_name"> العنوان</label>
          <input class="form-control" placeholder=" العنوان ..." type="text" name="name" maxlength="30" required>
        </div>


        <div class="form-group col-md-4">
          <label for="en_name"> معلومات الإتصال</label>
          <input class="form-control" placeholder=" العنوان ..." type="text" name="name" maxlength="30" required>
        </div>



        <div class="form-group col-md-4">
          <label for="en_name"> الهاتف</label>
          <input class="form-control" placeholder=" العنوان ..." type="text" name="name" maxlength="30" required>
        </div>


        <div class="form-group col-md-4">
          <label for="en_name"> البريد</label>
          <input class="form-control" placeholder=" العنوان ..." type="text" name="name" maxlength="30" required>
        </div>



        <div class="form-group col-md-4">
          <label for="en_name"> الموقع</label>
          <input class="form-control" placeholder=" العنوان ..." type="text" name="name" maxlength="30" required>
        </div>


        <div class="col-sm-6">
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
            </div>



        <div class="form-group col-md-6">
            <label for="ar_name">نبذه عن الفرع</label>
            <input class="form-control" placeholder="وصف الفرع ..." type="text" name="decription" maxlength="30" required>
          </div>



            <div class="form-group col-md-1">
              <label> صورة الفرع</label>
              <input type="file" class="form-control input_file_choose"  id="input_file_choose" name="logo" required />
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

</section>


@endsection
