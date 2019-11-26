@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>اﻷصناف الفرعيه</h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">اﻷصناف</a></li>
    <li class="active">إضافة صنف جديد</li>
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

<section class="content">
  <!-- Start Form AddModal -->
          <div id="AddModal" class="modal fade">
            <div class="modal-dialog">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">إضافة صنف</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="box-body">
                      <form id="user_form" role="form" action="{{ url('/save-sub-category') }}" method="post">
                             {{ csrf_field() }}
                            <div class="box-body">

                                <div class="form-group col-md-6">
                                    <label for="ar_name">الاسم باللغه العربيه</label>
                                    <input class="form-control" placeholder="الاسم باللغه العربيه..." type="text" name="ar_name" maxlength="40" required>
                                  </div>

                                  <div class="form-group col-md-6">
                                        <label for="en_name">الاسم باللغه الانجليزيه</label>
                                        <input class="form-control" placeholder="الاسم باللغه الانجليزيه..." type="text" name="en_name" maxlength="40" required>
                                      </div>

                                  <div class="form-group col-md-6">
                                    <label>الصنف الرئيسي</label>
                                    <select class="form-control form-control-sm" name="category_id" required>
                                      <?php
                                      $all_category=DB::table('categoryies')->get();
                                      foreach ($all_category as $key => $v_category) { ?>
                                        <option value="{{$v_category->id}}">{{$v_category->ar_name}}</option>
                                    <?php } ?>
                                    </select>
                                </div>

                            </div>

                            <div class="box-footer">
                              <button type="submit" class="btn btn-primary">إضافة صنف</button>
                            </div>
                      </form>
                    </div>
                  </div>
              </div>
          </div>
           <!-- End Form AddModal -->

    <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">عرض كل الاصناف</h3>
      <div class="box-tools pull-right">
        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
      </div>
    </div><!-- /.box-header -->
    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
            <tr>
              <th>المعرف</th>
              <th>اسم الصنف باللغه العربيه</th>
              <th>اسم الصنف باللغه الانجليزيه</th>
              <th>الصنف الرئيسي باللغه العربيه</th>
              <th>الصنف باللغه الانجليزيه</th>
              <th></th>
            </tr>
          </thead>
        @foreach( $all_sub_category_info as $v_sub_category )
          <tbody>
            <tr>
                <tr>
                  <td>{{ $v_sub_category->sub_cat_id }}</td>
                  <td>{{ $v_sub_category->cat_ar_name }}</td>
                  <td>{{ $v_sub_category->cat_en_name }}</td>
                  <td>{{ $v_sub_category->sub_cat_ar_name }}</td>
                  <td>{{ $v_sub_category->sub_cat_en_name }}</td>
                  <td>
                    <a href="{{URL::to('/delete-sub-category/'.$v_sub_category->sub_cat_id)}}" class="btn btn-sm btn-danger btn-flat pull-left">حذف</a>
                    <a href="{{URL::to('/edit-sub-category/'.$v_sub_category->sub_cat_id)}}" class="btn btn-sm btn-info btn-flat pull-left" >تعديل</a>
                  </td>
                </tr>
            </tr>


          </tbody>
        @endforeach
        </table>
      </div>
    </div>

    <div class="box-footer clearfix">
      <button id="add_button" data-toggle="modal" data-target="#AddModal" type="submit" class="btn btn-sm btn-info btn-flat pull-left">إضافة صنف جديد</button>
      <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">عرض كل الاصناف</a>
    </div>
</section>

@endsection
