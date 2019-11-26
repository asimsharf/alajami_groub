<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>لوحة تحكم مجموعة شراكات عبيد بن مفرج العجمي</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{asset('backend/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/AdminLTE.min.css')}}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('backend/dist/css/bootstrap-rtl.min.css')}}">
    <!--=== Rafeef | Fashion Favicon ===-->
    <link rel="shortcut icon" href="{{asset('frontend/fashion/assets/img/favicon.ico')}}" type="image/x-icon" />
    <link rel="stylesheet" href="{{asset('backend/plugins/iCheck/square/blue.css')}}">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="/"><b>لوحة تحكم</b> مجموعة شركات العجمي</a>
      </div>
      <div class="login-box-body">

        <p class="login-box-msg"> دخول المدير</p>
        <form  method="POST" action="{{ route('admin.login') }}" aria-label="{{ __('Admin Login') }}">
            @csrf
          <div class="form-group has-feedback">

          <input id="email" type="email" placeholder="البريد الإلكتروني" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">  <strong>{{ $errors->first('email') }}</strong> </span>
                                 @endif
                                 <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

          </div>
          <div class="form-group has-feedback">

          <input id="password" type="password" placeholder="كلمة المرور" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                    required> @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

          </div>
          <div class="row">
            <div class="col-xs-8">

            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">دخول</button>
            </div><!-- /.col -->
          </div>



                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old( 'remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('تذكرني') }}
                                    </label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">


                                <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                    {{ __('هل نسيت كلمة المرور؟') }}
                                </a>
                            </div>
                        </div>


        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('backend/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.4 -->
    <script src="{{asset('backend/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('backend/plugins/iCheck/icheck.min.js')}}"></script>
  </body>
</html>
