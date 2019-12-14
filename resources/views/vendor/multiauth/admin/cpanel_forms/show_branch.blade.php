@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content-header">
  <h1>عرض افرع الشركات</h1>
  <ol class="breadcrumb">
    <li><a href="/dashboard"><i class="fa fa-dashboard"></i> الصفحة الرئيسية</a></li>
    
  </ol>
</section>


<section class="content">
  <!-- Start Form userModal -->
 
    <!-- End Form userModal -->
    <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">عرض جميع الافرع</h3>
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
              <th>رقم الفرع</th>
              <th>اسم الفرع</th>
               <th>الشركه التابعه</th>
              <th>   نبذه عن الفرع</th>
              <th> عنوان الفرع</th>
              <th>  بريدالفرع الاكتروني</th>
              <th> رقم الهاتف</th>
              
            </tr>
          </thead>
            @foreach( $branchs as $branch )
          <tbody>
          
                <tr>
                  <td>{{ $branch->id }}</td>
                  <td>{{ $branch->name }}</td>
                  <td>{{ $branch->company->name }}</td>
                  <td>{{ $branch->short_intro }}</td>
                  <td>{{ $branch->adress }}</td>
                  <td>{{ $branch->email }}</td>
                  <td>{{ $branch->phone }}</td>
                 
                  <td> <a href="{{URL('/edit-branch/'.$branch->id)}}" class="btn btn-sm btn-info btn-flat pull-left">تعديل</a></td>
                  <td>
                  <form role="form" action="{{URL('/delete-branch/'.$branch->id)}}" method="post">
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
