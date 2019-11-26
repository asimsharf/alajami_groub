@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
    تعديل السيرة الزاتية
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">السيرة الزاتية </a></li>
    <li class="active">تعديل  </li>
  </ol>
</section>



<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">تعديل السيرة الزاتية</h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">

<form role="form" action="{{ url('/save-our-team') }}" enctype="multipart/form-data" method="post">
    {{ csrf_field() }}
      <div class="box-body">

        <div class="form-group col-md-2">
          <label for="ar_name">الإسم</label>
          <input class="form-control" placeholder="الإسم" type="text" maxlength="25" name="ar_name" required>
        </div>


        <div class="form-group col-md-2">
            <label for="email">البريد الالكتروني</label>
            <input class="form-control" placeholder="البريد الالكتروني" type="email" name="email" required>
          </div>

          <div class="form-group col-md-2">
            <label for="phone">الهاتف</label>
            <input class="form-control" placeholder="الهاتف" type="text" name="phone" maxlength="13" required>
          </div>

          <div class="form-group col-md-2">
            <label for="fb_link">رابط الفبسيوك</label>
            <input class="form-control" placeholder="رابط الفبسيوك" type="text" name="fb_link" maxlength="50" required>
          </div>

          <div class="form-group col-md-2">
            <label for="tw_link">رابط تويتر</label>
            <input class="form-control" placeholder="رابط تويتر" type="text" name="tw_link" maxlength="50" required>
          </div>

          <div class="form-group col-md-2">
            <label for="linkin">رابط لنك ان</label>
            <input class="form-control" placeholder="رابط لنك ان" type="text" name="linkin" maxlength="50" required>
          </div>


        <div class="form-group col-md-6">
          <label for="ar_name">بداية حياتة</label>
          <textarea class="form-control" placeholder="الاسم باللغه الانجلزية" maxlength="500" name="en_name" required></textarea>
        </div>

        <div class="form-group col-md-6">
          <label for="ar_name">الرؤية</label>
          <textarea class="form-control" placeholder="الاسم باللغه الانجلزية" maxlength="500" name="en_name" required></textarea>
        </div>


        <div class="form-group col-md-6">
          <label for="ar_name">الرسالة</label>
          <textarea class="form-control" placeholder="الاسم باللغه الانجلزية" maxlength="500" name="en_name" required></textarea>
        </div>


        <div class="form-group col-md-6">
            <label for="en_name">نبذه تعريفيه</label>
            <textarea class="form-control" placeholder="الاسم باللغه الانجلزية" maxlength="500" name="en_name" required></textarea>

          </div>




            <div class="form-group col-md-1">
                <label> صورة</label>
                <input type="file" style="border: 50px;" class="form-control input_file_choose"  id="input_file_choose" name="image" required/>
            </div>

            <div class="form-group col-md-5">
              <img id="input_image_selected_show" style=" border-radius:50px;" width="100%" height="400" src="{{URL('backend/dist/img/person.jpg')}}" />
            </div>
      </div>
      <div class="box-footer">
        <button type="submit" class="btn btn-primary">إضافة </button>
      </div>
</form>

</div>
</div>
</section>



@endsection
