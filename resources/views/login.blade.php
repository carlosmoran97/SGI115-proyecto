<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/iCheck/square/blue.css') }}">

</head>

<body class="hold-transition login-page">
<br>
  <div class="login-logo">
    <a href="{{ route('app.login.form') }}"><b>Complejo Educativo "Jose Marti"</b></a>
  
   </div>
   <div style="width: 30%; margin:auto;">

  
  <!-- /.login-logo -->
  
  <div class="login-box-body">
    <p class="login-box-msg" >Iniciar Sesión</p>
    
  <div class="login-logo">
    <img id="profile-img"  style="max-width:100px"  src="{{ asset('img/jose_marti.jpg') }}"/>
   
  </div>
   
    <form action="{{ route('app.login.submit') }}" method="post">
      {{ csrf_field() }} 
      <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error':'' }}">
        <input type="email" class="form-control" placeholder="Email" name="email" id="email" value="{{ old('email') }}" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

        @if($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
        @endif

      </div>
      <div class="form-group has-feedback {{ $errors->has('password')? 'has-error':'' }}">
        <input type="password" class="form-control" placeholder="Contraseña" name="password" id="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

        @if($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
        @endif

      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked': '' }}> Permanecer Conectado
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <br>
    <!-- /.social-auth-links -->

    <!--<a href="#">Olvide mi contraseña</a><br>-->
  
  </div>
  </div>
</div>

  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- iCheck -->
<script src="{{ asset('plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
