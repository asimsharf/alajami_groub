@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>الاصناف</h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">اﻷصناف</a></li>
    <li class="active">إضافة صنف جديد</li>
  </ol>
</section>


<section class="content">
  <!-- Start Form userModal -->
          <div id="userModal" class="modal fade">
            <div class="modal-dialog">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">إضافة صنف</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="box-body">
                        <form id="user_form" role="form" action="{{ url('/save-category') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">الاسم</label>
                                    <input class="form-control" placeholder="الاسم..." type="text" name="ar_name" maxlength="50" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">name by English</label>
                                    <input class="form-control" placeholder="Name..." type="text" name="en_name" maxlength="50" required>
                                </div>
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
    <!-- End Form userModal -->
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
              <th>الصنف بالعربي</th>
              <th>الصنف بالانجليزي </th>
              <th></th>
            </tr>
          </thead>
@foreach( $all_category_info as $v_category )
          <tbody>
            <tr>
                <tr>
                  <td>{{ $v_category->id }}</td>
                  <td>{{ $v_category->ar_name }}</td>
                  <td>{{ $v_category->en_name }}</td>
                  <td>
                    <a href="{{URL('/delete-category/'.$v_category->id)}}" class="btn btn-sm btn-danger btn-flat pull-left">حذف</a>
                    <a href="{{URL('/edit-category/'.$v_category->id)}}" class="btn btn-sm btn-info btn-flat pull-left">تعديل</a>
                  </td>
                </tr>
            </tr>


          </tbody>
@endforeach
        </table>
      </div>
    </div>

    <div class="box-footer clearfix">
      <button id="add_button" data-toggle="modal" data-target="#userModal" type="submit" class="btn btn-sm btn-info btn-flat pull-left">إضافة صنف جديد</button>

    </div>
</section>

@endsection
