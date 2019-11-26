@extends('multiauth::layouts.admin_layout')
@section('content')

<section class="content-header">
  <h1>
    تعديل اسلايد شو
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">الاسلايد شو</a></li>
    <li class="active">تعديل اسلايد شو</li>
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
  <h3 class="box-title">تعديل اسلايد شو</h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">


<form role="form" action="{{ url('/update-slider',$slider_info->id) }}" enctype="multipart/form-data" method="post">
  {{ csrf_field() }}
<div class="box-body">

  <div class="form-group col-xs-6">
    <label for="ar_title">العنوان باللغه العربيه</label>
    <input class="form-control" placeholder="العنوان..." type="text" value="{{ $slider_info->ar_title }}" name="ar_title" maxlength="50" required>
  </div>

  <div class="form-group col-xs-6">
    <label for="en_title">العنوان باللغه الانجليزيه</label>
    <input class="form-control" placeholder="وصف الاسلايد شو..." type="text" value="{{ $slider_info->en_title }}"  name="en_title" maxlength="50" required>
  </div>

  <div class="form-group col-xs-6">
    <label for="ar_sub_title">العنوان الفرعي باللغه العربيه</label>
    <input class="form-control" placeholder="العنوان..." type="text" value="{{ $slider_info->ar_sub_title }}"  name="ar_sub_title" maxlength="50" required>
  </div>

  <div class="form-group col-xs-6">
    <label for="en_sub_title">العنوان الفرعي ال باللغه الانجليزيه</label>
    <input class="form-control" placeholder="وصف الاسلايد شو..." type="text" value="{{ $slider_info->en_sub_title }}"  name="en_sub_title" maxlength="50" required>
  </div>

  <div class="form-group col-xs-6">
    <label for="ar_body">الوصف باللغه العربيه</label>
    <input class="form-control" placeholder="العنوان..." type="text" value="{{ $slider_info->ar_body }}" name="ar_body" maxlength="50" required>
  </div>

  <div class="form-group col-xs-6">
    <label for="en_body">الوصف باللغه الانجليزيه</label>
    <input class="form-control" placeholder="وصف الاسلايد شو..." type="text" value="{{ $slider_info->en_body }}" name="en_body" maxlength="50" required>
  </div>


  <div class="form-group col-xs-6">
    <label for="url">رابط</label>
    <input class="form-control" placeholder="رابط..." type="text" value="{{ $slider_info->url }}" name="url" maxlength="50" required>
</div>

  <div class="form-group col-xs-6">
    <label for="publication_status">حالة النشر</label>
    <select class="form-control" name="publication_status" value="{{ $slider_info->publication_status }}"  required>
      <option value="1">مفعل</option>
      <option value="0">غير مفعل</option>
    </select>
</div>

<div class="form-group col-xs-12">
  <label for="image">الصورة</label>
    <input type="file" value="{{ $slider_info->url }}" class=" form-control input_file_choose"  id="input_file_choose" name="image" required>
</div>
 <div class="form-group col-md-12">
    <img id="input_image_selected_show" border="1" width="100%" height="621px" src="{{ URL::to($slider_info->image) }}" />
  </div>
</div>

<div class="box-footer">
  <button type="submit" class="btn btn-primary">إضافة</button>
</div>
</form>

</div>
</div>

</section>

@endsection
