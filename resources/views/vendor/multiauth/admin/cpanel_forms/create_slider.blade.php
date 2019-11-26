@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>
    إضافة اسلايد
  </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    <li><a href="#">الاسلايد </a></li>
    <li class="active">إضافة اسلايد </li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

<div class="box box-info">
<div class="box-header with-border">
  <h3 class="box-title">إضافة اسلايد </h3>

  <div class="box-tools pull-right">
    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
  </div>
</div><!-- /.box-header -->

<div class="box-body">


<form role="form" action="{{ url('/save-slider') }}" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
      <div class="box-body">

        <div class="form-group col-xs-6">
          <label for="ar_title">العنوان ارئيسي</label>
          <input class="form-control" placeholder="العنوان..." type="text" name="title" maxlength="40" required>
        </div>

        <div class="form-group col-xs-6">
          <label for="en_title">العنوان الفرعي </label>
          <input class="form-control" placeholder="وصف الاسلايد شو..." type="text" name="subtitle" maxlength="40" required>
        </div>

        <div class="form-group col-xs-6">
          <label for="ar_sub_title">المحتوى</label>
          <input class="form-control" placeholder="العنوان..." type="text" name="summary" maxlength="50" required>
        </div>



        <div class="form-group col-xs-6">
          <label for="publication_status">حالة النشر</label>
          <select class="form-control" name="publication_status" required>
            <option value="1">مفعل</option>
            <option value="0">غير مفعل</option>
          </select>
      </div>

      <div class="form-group col-xs-12">
        <label for="file">الصورة</label>
          <input type="file" class="form-control input_file_choose"  id="input_file_choose" name="image" required>
      </div>

      <div class="form-group col-md-12">
           <img id="input_image_selected_show" border="1" width="100%" height="621px" src="{{URL('backend/dist/img/person.jpg')}}" />
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
