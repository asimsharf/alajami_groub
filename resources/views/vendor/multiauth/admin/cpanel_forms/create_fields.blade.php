@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
 مجالات العمل
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#"> المجالات</a></li>
    <li class="active">إضافة  </li>
  </ol>
</section>


<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">إضافة مجال جديد</h3>

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
          <label for="en_name">إسم مجال العمل</label>
          <input class="form-control" placeholder="إسم مجال العمل..." type="text" name="name" maxlength="30" required>
        </div>



        <div class="form-group col-md-4">
            <label for="ar_name">نبذه عن المجال</label>
            <input class="form-control" placeholder="وصف مجال العمل..." type="text" name="decription" maxlength="30" required>
          </div>



            <div class="form-group col-md-1">
              <label> صورة المجال</label>
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
