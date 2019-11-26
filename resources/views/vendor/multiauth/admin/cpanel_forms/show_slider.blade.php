@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
    عرض اسلايد شو
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">كل اسلادشو</a></li>
    <li class="active">السلاسد شو</li>
  </ol>
</section>

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
                        <form role="form" action="{{ url('/save-slider') }}" enctype="multipart/form-data" method="post">
                            {{ csrf_field() }}
                          <div class="box-body">

                            <div class="form-group col-xs-6">
                              <label for="ar_title">العنوان باللغه العربيه</label>
                              <input class="form-control" placeholder="العنوان..." type="text" name="ar_title" maxlength="50" required>
                            </div>

                            <div class="form-group col-xs-6">
                              <label for="en_title">العنوان باللغه الانجليزيه</label>
                              <input class="form-control" placeholder="وصف الاسلايد شو..." type="text" name="en_title" maxlength="50" required>
                            </div>

                            <div class="form-group col-xs-6">
                              <label for="ar_sub_title">العنوان الفرعي باللغه العربيه</label>
                              <input class="form-control" placeholder="العنوان..." type="text" name="ar_sub_title" maxlength="50" required>
                            </div>

                            <div class="form-group col-xs-6">
                              <label for="en_sub_title">العنوان الفرعي ال باللغه الانجليزيه</label>
                              <input class="form-control" placeholder="وصف الاسلايد شو..." type="text" name="en_sub_title" maxlength="50" required>
                            </div>

                            <div class="form-group col-xs-6">
                              <label for="ar_body">الوصف باللغه العربيه</label>
                              <input class="form-control" placeholder="العنوان..." type="text" name="ar_body" maxlength="50" required>
                            </div>

                            <div class="form-group col-xs-6">
                              <label for="en_body">الوصف باللغه الانجليزيه</label>
                              <input class="form-control" placeholder="وصف الاسلايد شو..." type="text" name="en_body" maxlength="50" required>
                            </div>


                            <div class="form-group col-xs-6">
                              <label for="url">رابط</label>
                              <input class="form-control" placeholder="رابط..." type="text" name="url" maxlength="50" required>
                          </div>

                            <div class="form-group col-xs-6">
                              <label for="publication_status">حالة النشر</label>
                              <select class="form-control" name="publication_status" required>
                                <option value="1">مفعل</option>
                                <option value="0">غير مفعل</option>
                              </select>
                          </div>

                          <div class="form-group col-xs-12">
                            <label for="image">الصورة</label>
                              <input type="file" class="form-control input_file_choose"  id="input_file_choose" name="image" required>
                              <p class="help-block">اضافة صورة اسلايد شو</p>
                          </div>

                           <div class="form-group col-md-12">
                            <img id="input_image_selected_show" border="1" width="100%" height="50%" src="{{URL('backend/dist/img/person.jpg')}}" />
                          </div>

                        </div>

                          <div class="box-footer">
                            <button type="submit" class="btn btn-primary">إضافة</button>
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
                <button id="add_button" data-toggle="modal" data-target="#addModal" type="submit" class="btn btn-sm btn-info btn-flat pull-left">إضافة اسلايد جديد</button>
          <h3 class="box-title">عرض كل الاسلاسد شو</h3>
        </div>
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>صورة </th>
                <th>العنوان باللغه العربيه</th>
                <th>العنوان باللغه الانجليزيه</th>
                <th>العنوان الفرعي باللغه العربيه</th>
                <th>العنوان الفرعي باللغه الانجليزيه</th>

                <th>حالة النشر</th>
                <th>الخيارات</th>
              </tr>
            </thead>
            <tbody>
            <!-- @foreach( $all_slider_info as $v_slider )
              <tr>
                <td>{{ $v_slider->id }}</td>
                <td><img width="60" height="40" src="{{ URL::to($v_slider->image) }}" /></td>
                <td>{{ $v_slider->ar_title }}</td>
                <td>{{ $v_slider->en_title }}</td>
                <td>{{ $v_slider->ar_sub_title }}</td>
                <td>{{ $v_slider->en_sub_title }}</td>

                <td>
                  @if( $v_slider->publication_status === 1 )
                      <a href="{{URL::to('/unactive-slider/'.$v_slider->id)}}" class="btn btn-sm btn-success btn-flat ">
                        <span>إلغاء</span>
                      </a>
                      @else
                      <a href="{{URL::to('/active-slider/'.$v_slider->id)}}" class="btn btn-sm btn-danger btn-flat ">
                        <span>تفعيل</span>
                      </a>
                    @endif
                </td>
                <td>
                  <a href="{{URL::to('/delete-slider/'.$v_slider->id)}}" class="btn btn-sm btn-danger btn-flat pull-left delete-slider">حذف</a>
                  <a href="{{URL::to('/edit-slider/'.$v_slider->id)}}" class="btn btn-sm btn-info btn-flat pull-left">تعديل</a>
                </td>
              </tr>
            @endforeach              -->
            </tbody>

          </table>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
