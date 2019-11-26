@extends('multiauth::layouts.admin_layout')
@section('content')

<section class="content-header">
  <h1>
    تعديل فريق العمل
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">فريق العمل</a></li>
    <li class="active">تعديل </li>
  </ol>
</section>


<?php
$message = Session::get('message');
if ($message)
{
  echo'<div class="alert alert-success alert-dismissible">
  <button type="button" class="close" data-dismiss="alert" aria-lobl="close">
    <span aria-hidden="true">&times;</span>
  </button>
  '.$message.'
</div>';
    Session::put('message', null);
}
?>
<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">تعديل</h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">

<form role="form" action="{{ url('/update-our-team',$our_team_info->id) }}" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
      <div class="box-body">

        <div class="form-group col-md-4">
          <label for="ar_name">الاسم باللغه العربيه</label>
          <input class="form-control" placeholder="الاسم باللغه العربيه" type="text" value="{{ $our_team_info->ar_name }}" name="ar_name" maxlength="50" required>
        </div>
        <div class="form-group col-md-4">
            <label for="en_name">الاسم باللغه الانجلزية</label>
            <input class="form-control" placeholder="الاسم باللغه الانجلزية" type="text" value="{{ $our_team_info->en_name }}"  name="en_name" maxlength="50" required>
          </div>
          <div class="form-group col-md-4">
            <label for="email">البريد الالكتروني</label>
            <input class="form-control" placeholder="البريد الالكتروني" type="email" value="{{ $our_team_info->email }}"  name="email" required>
          </div>
          <div class="form-group col-md-4">
            <label for="phone">الهاتف</label>
            <input class="form-control" placeholder="الهاتف" type="text" value="{{ $our_team_info->phone }}"  name="phone" required>
          </div>
          <div class="form-group col-md-4">
            <label for="fb_link">رابط الفبسيوك</label>
            <input class="form-control" placeholder="رابط الفبسيوك" type="text" value="{{ $our_team_info->fb_link }}"  name="fb_link" maxlength="50" required>
          </div>
          <div class="form-group col-md-4">
            <label for="tw_link">رابط تويتر</label>
            <input class="form-control" placeholder="رابط تويتر" type="text" value="{{ $our_team_info->tw_link }}"  name="tw_link" maxlength="50" required>
          </div>
          <div class="form-group col-md-4">
            <label for="linkin">رابط لنك ان</label>
            <input class="form-control" placeholder="رابط لنك ان" type="text" value="{{ $our_team_info->linkin }}"  name="linkin" maxlength="50" required>
          </div>
          <div class="form-group col-md-4">
                <label for="file"> صورة</label>
                <input type="file" class="form-control input_file_choose"  id="input_file_choose"  name="image" required/>
            </div>

            <div class="form-group col-md-4">
              <img id="input_image_selected_show" style=" border-radius:50px;" width="100%" height="250" src="{{URL($our_team_info->image)}}" />
            </div>
      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">تعديل </button>
      </div>
</form>

</div>
</div>

</section>
@endsection
