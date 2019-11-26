@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
    تعديل المنتجات
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#"> المنتجات</a></li>
    <li class="active">تعديل المنتجات </li>
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
  <h3 class="box-title">تعديل  المنتجات</h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div>

<div class="box-body">



    <form role="form" action="{{ url('/update-product',$product_info->id) }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
    <div class="box-body">

        <div class="form-group col-md-6">
          <label for="en_name">إسم المنتج باللغه الانجليزيه</label>
          <input class="form-control" placeholder="اسم المنتج باللغه اﻹنجليزيه..." type="text" value="{{ $product_info->en_name }}" name="en_name" maxlength="40" required>
        </div>

        <div class="form-group col-md-6">
            <label for="ar_name">إسم المنتج باللغه العربيه</label>
            <input class="form-control" placeholder="إسم المنتج ابللغه العربيه..." type="text" value="{{ $product_info->ar_name }}" name="ar_name" maxlength="40" required>
        </div>

        <div class="form-group col-md-6">
            <label> الصنف الرئيسي</label>
            <select class="form-control form-control-sm" name="category_id" id="selected_category_id" required>
                <option selected disabled>اختير الصنف الرئيسي</option>
            @foreach ($all_category=DB::table('categoryies')->get(); as $key => $v_category)
                <option value="{{$v_category->id}}"> <b> {{$v_category->ar_name}} </b> </option>
            @endforeach
            </select>
        </div>

        <div class="form-group col-md-6">
                <label> الصنف الفرعي</label>
                <select class="form-control form-control-sm" name="sub_category_id" id="selected_sub_cat_id" required>
                 <option selected disabled required>اختير الصنف الفرعي</option>
                </select>
            </div>


        <div class="form-group col-md-6">
            <label>مخصص لي</label>
            <select class="form-control form-control-sm" name="gender" required>
            <option value="1">رجال</option>
            <option value="2">نساء</option>
            </select>
        </div>
        <div style="border:1" class="">
        <div class="form-group col-md-3">
            <label for="file"> صورة المنتج</label>
            <input class="form-control input_file_choose"  id="input_file_choose" type="file" value="{{ $product_info->image }}" name="image" required />
        </div>

        <div class="form-group col-md-3">
           <img id="input_image_selected_show" border="1" width="225" height="200" src="{{ URL::to($product_info->image) }}" />
        </div>
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
