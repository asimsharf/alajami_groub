@extends('multiauth::layouts.admin_layout')
@section('content')

<section class="content-header">
  <h1>
 تعديل الأصناف الفرعيه
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">الأصناف الفرعيه</a></li>
    <li class="active">إضافة  </li>
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
  <h3 class="box-title">إضافة صنف فرعي جديد</h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">

<form role="form" action="{{ url('/update-sub-category',$sub_category_info->id) }}" method="post">
        {{ csrf_field() }}
    <div class="box-body">
        <div class="form-group col-md-3">
          <label for="ar_name">اسم الصنف الفرعي (العربي)</label>
          <input class="form-control" placeholder="الاسم..." type="text" name="ar_name" value="{{ $sub_category_info->ar_name }}" maxlength="40" required>
        </div>
        <div class="form-group col-md-3">
                <label for="ar_name">اسم الصنف الفرعي (العربي)</label>
                <input class="form-control" placeholder="الاسم..." type="text" name="en_name" value="{{ $sub_category_info->ar_name }}" maxlength="40" required>
              </div>
        <div class="form-group col-md-3">
            <label>الصنف الرئيسي عربي  </label>
            <select class="form-control form-control-sm" name="category_id" required>
                <?php
                $all_category=DB::table('categoryies')->get();
                foreach ($all_category as $key => $v_category) { ?>
                <option value="{{$v_category->id}}">{{$v_category->ar_name}}</option>
            <?php } ?>
            </select>
        </div>
        <div class="form-group col-md-3">
            <label>  main category by English   </label>
            <select class="form-control form-control-sm" name="category_id" required>
                <?php
                $all_category=DB::table('categoryies')->get();
                foreach ($all_category as $key => $v_category) { ?>
                <option value="{{$v_category->id}}">{{$v_category->en_name}}</option>
            <?php } ?>
            </select>
        </div>
    </div>

      <div class="box-footer">
         <button type="submit" class="btn btn-primary">تعديل صنف</button>
      </div>

</form>

</div>
</div>

</section>

@endsection
