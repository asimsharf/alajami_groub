@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>عرض مجالات العمل </h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    
  </ol>
</section>


<section class="content">
  <!-- Start Form userModal -->
 
    <!-- End Form userModal -->
    <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">عرض جميع مجالات العمل</h3>
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
                <th>رقم المجال</th>
              <th> إسم المجال</th>
              
             
            </tr>
          </thead>
            @foreach( $fields as $field )
          <tbody>
          
                <tr>
                  <td>{{ $field->id }}</td>
                  <td>{{ $field->name }}</td>
                  <td>
                  <form role="form" action="{{URL('/delete_catogry/'.$field->id)}}" method="post">
                      @method('DELETE')
                      {{ csrf_field() }}
                    <button type="submit" class="btn btn-sm btn-danger btn-flat pull-left">حذف</a>
                  </form>
                   
                  </td>
                 
                </tr>
            


          </tbody>
@endforeach
        </table>
      </div>
    </div>
    @include('sweetalert::alert')
</section>

@endsection
