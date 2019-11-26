@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
      المنتجات
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">كل المنتجات</a></li>
    <li class="active"> المنتجات</li>
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
        <!-- Start Form userModal -->
        <div id="addModal" class="modal fade">
          <div class="modal-dialog">
              <div class="box box-info">
                  <div class="box-header with-border">
                      <h3 class="box-title">إضافة منتج جديد</h3>
                      <div class="box-tools pull-right">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                  </div>
                  <div class="box-body">
                        <form role="form" action="{{ url('/save-product') }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                        <div class="box-body">

                            <div class="form-group col-md-6">
                              <label for="en_name">إسم المنتج باللغه الانجليزيه</label>
                              <input class="form-control" placeholder="اسم المنتج باللغه اﻹنجليزيه..." type="text" name="en_name" maxlength="40" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="ar_name">إسم المنتج باللغه العربيه</label>
                                <input class="form-control" placeholder="إسم المنتج ابللغه العربيه..." type="text" name="ar_name" maxlength="40" required>
                              </div>

                                <div class="form-group col-md-6">
                                    <label>الصنف الرئيسي</label>
                                    <select class="form-control form-control-sm" name="category_id" id="selected_category_id" required>
                                     <option selected disabled>اختير الصنف الرئيسي</option>
                                      <?php
                                      $all_category=DB::table('categoryies')->get();
                                      foreach ($all_category as $key => $v_category) { ?>
                                        <option value="{{$v_category->id}}">{{$v_category->ar_name}}</option>
                                    <?php } ?>
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


                                <div class="form-group col-md-6">
                                  <label for="file"> صورة المنتج</label>
                                  <input type="file" class="form-control input_file_choose" id="input_file_choose" name="image" required/>
                                </div>

                                <div class="form-group col-md-12">
                                <img id="input_image_selected_show" border="1" width="100%" height="50%" src="{{URL('backend/dist/img/person.jpg')}}" />
                                </div>

                        </div>

                          <div class="box-footer">
                             <button type="submit" class="btn btn-primary">إضافة </button>
                          </div>

                    </form>
                  </div>
                </div>
            </div>
        </div>
  <!-- End Form userModal -->

  <div class="row">
    <div class="col-xs-12 ">
      <div class="box box-info">
        <div class="box-header ">
            <button id="add_button" data-toggle="modal" data-target="#addModal" type="submit" class="btn btn-sm btn-info btn-flat pull-left">إضافة منتج جديد</button>
          <h3 class="box-title">عرض كل المنتجات</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>صورة </th>
                <th>اسم المنتج بالعربي</th>
                <th>اسم المنتج بالإنجليزي</th>
                <th>الجنس</th>
                <th>التصنيف الرئيسي</th>
                 <th>التصنيف الرئيسي</th>
                <th>التصنيف بالعربيه</th>
                <th>التصنيف الفرعي بالانجلزيه</th>
                <th>الخيارات</th>
              </tr>
            </thead>
            <tbody>
            @foreach( $all_product_info as $v_product )
              <tr>
                <td>{{ $v_product->id }}</td>
                <td><img width="60" height="40" src="{{ URL::to($v_product->image) }}" /></td>
                <td>{{ $v_product->ar_name }}</td>
                <td>{{ $v_product->en_name }}</td>
                <td>
                @if($v_product->gender == 1)
                  {{('رجال')}}
                @else
                  {{('نساء')}}
                @endif
                </td>
                <td>{{ $v_product->cat_ar_name }}</td>
                <td>{{ $v_product->cat_en_name }}</td>
                <td>{{ $v_product->sub_cat_ar_name }}</td>
                <td>{{ $v_product->sub_cat_en_name }}</td>
                <td>
                  <a href="{{URL::to('/delete-product/'.$v_product->id)}}" class="btn btn-sm btn-danger btn-flat pull-left delete-slider">حذف</a>
                  <a href="{{URL::to('/edit-product/'.$v_product->id)}}" class="btn btn-sm btn-info btn-flat pull-left">تعديل</a>
                </td>
              </tr>
            @endforeach
            </tbody>


          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
