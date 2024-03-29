@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>عرض الشركات المضافه</h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    
  </ol>
</section>


<section class="content">
  <!-- Start Form userModal -->
 
    <!-- End Form userModal -->
    <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">عرض جميع الشركات</h3>
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
              <th>رقم الشركه</th>
              <th>اسم الشركه</th>
              <th>   نبذه عن الشركه</th>
              <th> عنوان الشركه</th>
              <th>  بريدالشركه الاكتروني</th>
              <th> رقم الهاتف</th>
              <th> الحاله</th>
              <th>المواقع ذات الصله</th>
            </tr>
          </thead>
            @foreach( $companies as $company )
          <tbody>
          
                <tr>
                  <td>{{ $company->id }}</td>
                  <td>{{ $company->name }}</td>
                  <td>{{ $company->short_intro }}</td>
                  <td>{{ $company->address }}</td>
                  <td>{{ $company->email }}</td>
                  <td>{{ $company->phone }}</td>
                  @if($company->publication_status==1)
                  <td>مفعل</td>
                  @else
                  <td>غير مفعل</td>
                  @endif
                  <td>{{ $company->company_url}}</td>
                  <td> <a href="{{URL('/edit-company/'.$company->id)}}" class="btn btn-sm btn-info btn-flat pull-left">تعديل</a></td>
                  <td>
                  <form role="form" action="{{URL('/delete-company/'.$company->id)}}" method="post">
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
