@extends('multiauth::layouts.admin_layout')
@section('content')
<section class="content">
  <!-- Start Form AddModal -->
          <div id="AddModal" class="modal fade">
            <div class="modal-dialog">
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">شاشه السيره الذاتيه لشركه العجمي</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                    </div>
                </div>
            </div>
          </div>
               
           <!-- End Form AddModal -->

    <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">عرض السيره الذاتيه</h3>
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
              <th>الاسم</th>
              <th>البريد الاكتروني</th>
              <th>رقم الهاتف</th>
              <th>رابط فيسبوك </th>
              <th>رابط تويتر </th>
              <th>الرؤيه</th>
              <th>الرساله</th>
              <th>نبذه الحياة العلميه</th>
            </tr>
          </thead>
            @foreach( $resums as $resum )
          <tbody>
            <tr>
                <tr>
                  
                  <td>{{ $resum->name }}</td>
                  <td>{{ $resum->email }}</td>
                  <td>{{ $resum->phone }}</td>
                  <td>{{ $resum->fb_link }}</td>
                  <td>{{ $resum->tw_link }}</td>
                  <td>{{ $resum->life_mission }}</td>
                  <td>{{ $resum->life_vision }}</td>
                  <td>{{ $resum->educational_life }}</td>
                  <td>
                    <form role="form" action="{{URL('/delete_resume/'.$resum->id)}}" method="post">
                        @method('DELETE')
                        {{ csrf_field() }}
                      <button type="submit" class="btn btn-sm btn-danger btn-flat pull-left">حذف</a>
                    </form>
                  </td>
                </tr>
            </tr>
          </tbody>
          
      @endforeach

        </table>
      </div>
    </div>
    </div>
    @include('sweetalert::alert')
</section>

@endsection
