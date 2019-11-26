@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1> فريق العمل</h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">فريق العمل</a></li>
    <li class="active">إضافة صنف جديد</li>
  </ol>
</section>


<section class="content">
  <!-- Start Form AddModal -->
          <div id="AddModal" class="modal fade">
            <div class="modal-dialog">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">إضافة فريق العمل</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                    <div class="box-body">
                      <form role="form" action="{{ url('/save-our-team') }}" enctype="multipart/form-data" method="post">
                        {{ csrf_field() }}
                          <div class="box-body">

                            <div class="form-group col-md-6">
                              <label for="ar_name">الاسم باللغه العربيه</label>
                              <input class="form-control" placeholder="الاسم باللغه العربيه" type="text" name="ar_name" maxlength="50" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="en_name">الاسم باللغه الانجلزية</label>
                                <input class="form-control" placeholder="الاسم باللغه الانجلزية" type="text" name="en_name" maxlength="50" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="email">البريد </label>
                                <input class="form-control" placeholder="البريد الالكتروني" type="email" name="email" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="phone">الهاتف</label>
                                <input class="form-control" placeholder="الهاتف" type="text" name="phone" maxlength="15" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="fb_link"> الفبسيوك</label>
                                <input class="form-control" placeholder="رابط الفبسيوك" type="text" name="fb_link" maxlength="50" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="tw_link"> تويتر</label>
                                <input class="form-control" placeholder="رابط تويتر" type="text" name="tw_link" maxlength="50" required>
                              </div>
                              <div class="form-group col-md-6">
                                <label for="linkin"> لنك ان</label>
                                <input class="form-control" placeholder="رابط لنك ان" type="text" name="linkin" maxlength="50" required>
                              </div>
                              <div class="form-group col-md-6">
                                    <label for="file"> صورة</label>
                                    <input type="file" class="form-control input_file_choose"  id="input_file_choose"  name="image" required/>
                                </div>

                                <div class="form-group col-md-12">
                                    <img id="input_image_selected_show" style=" border-radius:50px;" width="100%" height="50%" src="{{URL('backend/dist/img/person.jpg')}}" />
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
              <th>الصورة</th>
              <th>الاسم باللغه العربيه</th>
              <th>الاسم باللغه الانجليزيه </th>
              <th>البريد </th>
              <th>الهاتف</th>
            </tr>
          </thead>
@foreach( $all_our_team_info as $v_our_team )
          <tbody>
            <tr>
                <tr>
                  <td>{{ $v_our_team->id }}</td>
                  <td><img width="60" height="40" src="{{ URL::to($v_our_team->image) }}" /></td>
                  <td>{{ $v_our_team->ar_name }}</td>
                  <td>{{ $v_our_team->en_name }}</td>
                  <td>{{ $v_our_team->email }}</td>
                  <td>{{ $v_our_team->phone }}</td>
                  <td>
                    <a href="{{URL::to('/delete-our-team/'.$v_our_team->id)}}" class="btn btn-sm btn-danger btn-flat pull-left">حذف</a>
                    <a href="{{URL::to('/edit-our-team/'.$v_our_team->id)}}" class="btn btn-sm btn-info btn-flat pull-left" >تعديل</a>
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
      <a href="javascript::;" class="btn btn-sm btn-default btn-flat pull-right">عرض كل فريق العمل</a>
    </div>
</section>

@endsection
