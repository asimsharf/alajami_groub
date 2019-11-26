<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>مجموعة شركات عبيد بن مفرج العجمي</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.css')}}">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />


<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>

    <!--=== Rafeef | Fashion Favicon ===-->
    <link rel="shortcut icon" href="{{asset('frontend/fashion/assets/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('backend/dist/css/skins/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/bootstrap-rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/dist/css/custom.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <!--
  BODY TAG OPTIONS:
  =================
  Apply one or more of the following classes to get the
  desired effect
  |---------------------------------------------------------|
  | SKINS         | skin-blue                               |
  |               | skin-black                              |
  |               | skin-purple                             |
  |               | skin-yellow                             |
  |               | skin-red                                |
  |               | skin-green                              |
  |---------------------------------------------------------|
  |LAYOUT OPTIONS | fixed                                   |
  |               | layout-boxed                            |
  |               | layout-top-nav                          |
  |               | sidebar-collapse                        |
  |               | sidebar-mini                            |
  |---------------------------------------------------------|
  -->
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>ع</b>ع</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b> مجموعة </b>  عبيد </span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{URL::to('backend/dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{Session::get('admin_name')}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{URL::to('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
                    <p>
                      سوداغورث
                      <small>عضؤ منذ عام 2018</small>
                    </p>
                  </li>

                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="/profile" class="btn btn-default btn-flat">الصفحة الشخصية</a>
                    </div>
                    <div class="pull-right">
                      <a href="/logout" class="btn btn-default btn-flat">تسجيل خروج</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{URL::to('backend/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{Session::get('admin_name')}}</p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> متصل الان</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="البحث...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">الرئيسية</li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة شركات العجمي</span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_company')}}"><span>إضافة شركة</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_company')}}"> <span>عرض الشركات</span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>السرة الزاتية للعجمي</span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/update_resume')}}"><span>تعديل السيرة الزاتية</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_resume')}}"> <span>عرض السيرة الزاتية</span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة مجالات العمل</span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_fields')}}"><span>إضافة</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_fields')}}"> <span>عرض المنتجات</span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة السلايد </span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_slider')}}"><span>إضافة</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_slider')}}"> <span>عرض السلايد</span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة الوسائط والمطبوعات  </span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_media')}}"><span> إضافة</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_media')}}"> <span>عرض فريق العمل </span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة خدمات شركات العجمي </span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_services')}}"><span>إضافة خدمة</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_services')}}"> <span>عرض الخدمات</span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة معلومات إتصال شركات  </span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_contact')}}"><span> إضافة \ تعديل المعلومات</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_contact')}}"> <span>عرض المعلومات </span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة افرع شركات العجمي </span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_branch')}}"><span>إضافة الأفرع </span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_branch')}}"> <span> عرض الافرع</span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#"><i class="fa fa-link"></i> <span>إدارة معلومات الموقع </span> <i class="fa fa-angle-left pull-left"></i></a>
              <ul class="treeview-menu">
                <li><a href="{{URL::to('/create_infos')}}"><span>حول الموقع</span> <i class="fa fa-angle-left pull-left"></i></a></li>
                <li><a href="{{URL::to('/show_infos')}}"> <span>فريق العمل</span> <i class="fa fa-angle-left pull-left"></i></a></li>
              </ul>
            </li>

          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">



        <!-- Main content -->
        <section class="content">

              @yield('content')

        </section><!-- /.content -->



      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-left hidden-xs">
         مجموعة شركات عبيد بن مفرج العجمي
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2019 <a href="#">سوداغورث للحلول المتكاملة</a>.</strong> جميع الحقوق محفوظة
      </footer>

    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="{{asset('backend/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('backend/dist/js/app.min.js')}}"></script>
    <script src="{{asset('backend/js/custom.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
    <script>
        function SelectColor() {
          var x = document.getElementById("Color").value;
          document.getElementById("demo").innerHTML = x;
        }
    </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
         Both of these plugins are recommended to enhance the
         user experience. Slimscroll is required when using the
         fixed layout. -->
  </body>
</html>
