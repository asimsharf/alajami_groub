@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
    تعديل الصنف
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">اﻷصناف</a></li>
    <li class="active">تعديل الصنف</li>
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

<form role="form" action="{{ url('/update-category',$category_info->id) }}" method="post">
    {{ csrf_field() }}
      <div class="box-body">

        <div class="form-group col-md-6" >
          <label for="ar_name">الاسم باللغه الانجليزيه</label>
          <input class="form-control" type="text" name="ar_name" value="{{ $category_info->ar_name }}" maxlength="40" required>
        </div>

        <div class="form-group col-md-6  ">
                <label for="ar_name">الاسم باللغه العربيه</label>
                <input class="form-control" type="text" name="en_name" value="{{ $category_info->en_name }}" maxlength="40" required>
              </div>

      </div>

      <div class="box-footer">
        <button type="submit" class="btn btn-primary">تعديل</button>
      </div>
</form>

</div>
</div>

</section>
@endsection
