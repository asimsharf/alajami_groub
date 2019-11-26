@extends('multiauth::layouts.admin_layout')
@section('content')

<section class="content-header">
  <h1>
الوسائط والمطبوعات
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">الوسائط</a></li>
    <li class="active">إضافة  </li>
  </ol>
</section>


<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">إضافة الوسائط</h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">

<form role="form" action="{{ url('/save-sub-category') }}" method="post">
        {{ csrf_field() }}
    <div class="box-body">

        <div class="form-group col-md-4">
          <label for="ar_name">وصف الصورة</label>
          <input class="form-control" placeholder="الاسم..." type="text" name="ar_name" maxlength="40" required>
        </div>

        <div class="form-group col-md-4">
                <label for="en_name">رابط الصورة</label>
                <input class="form-control" placeholder="الاسم..." type="text" name="en_name" maxlength="40" required>
              </div>

            <div class="form-group col-md-4">
                <label>الشركة</label>
                <select class="form-control form-control-sm" name="category_id" required>
                    <option value="1">مجمع العناية الطبي</option>
                </select>
            </div>



            <div class="form-group col-md-1">
              <label> صورة </label>
              <input type="file" class="form-control input_file_choose"  id="input_file_choose" name="image_tow" required />
            </div>



            <div class="form-group col-md-5">
                 <img id="input_image_selected_show" border="0" width="100%" height="300px" src="{{URL('backend/dist/img/person.jpg')}}" />
            </div>



            <div class="form-group col-md-1">
              <label> صورة </label>
              <input type="file" class="form-control input_file_choose"  id="input_file_choose_tow" name="image_one" required />
            </div>



            <div class="form-group col-md-5">
                 <img id="input_image_selected_show_tow" border="0" width="100%" height="300px" src="{{URL('backend/dist/img/person.jpg')}}" />
            </div>


    </div>

      <div class="box-footer">
         <button type="submit" class="btn btn-primary">إضافة صنف</button>
      </div>

</form>

</div>
</div>

</section>

@endsection
