

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition login-page">
<<<<<<< HEAD
        
        <!-- alert -->
        <div class="col-md-3-mt-12">
          	 @if ($message = Session::get('success'))
		          <div class="alert alert-success alert-block">
		           <button type="button" class="close" data-dismiss="alert"> <br>
                 <i class="fas fa-window-close"></i>
                  </button> 
		           <strong>{{ $message }}</strong>
		         </div>
		         @endif
          </div>
=======

>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
      

<div class="login-box">
  <div class="login-logo">
    <a href="#">Login</a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('postlogin') }}" method="post">

      {{ csrf_field() }}
      
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="NIK" name="nik_user">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-id-card"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password"  id="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
<<<<<<< HEAD
        
          <div class="col-6">
           
                <br>
                <button type="button" onclick="lihat();" class="btn btn-warning">Lihat Password</button>
           
=======
          <div class="col-8">
            <div class="icheck-primary">
              <!-- <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label> -->
            </div>
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
          </div>
          <!-- /.col -->
          <div class="col-6">
          <br>
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center mb-3">
<<<<<<< HEAD
        <!-- <p>- OR -</p>
        <a href="{{ url('/')}}" class="btn btn-block btn-primary">
           Registrasi 
        </a> -->
        
=======
        <p>- OR -</p>
        <a href="{{ url('/')}}" class="btn btn-block btn-primary">
           Registrasi 
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
      </div>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <!-- <a href="forgot-password.html">I forgot my password</a> -->
      </p>
      <p class="mb-0">
        <!-- <a href="register.html" class="text-center">Register a new membership</a> -->
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<<<<<<< HEAD
        
        
=======
         <!-- /.login-box -->
         <div class="col-md-3-mt-12">
          	 @if ($message = Session::get('success'))
		          <div class="alert alert-success alert-block">
		           <button type="button" class="close" data-dismiss="alert">×</button> 
		          <strong>{{ $message }}</strong>
		         </div>
		         @endif
          </div>
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
<!-- jQuery -->
<script src="{{ asset('AdminLTE//plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>



<!-- REQUIRED SCRIPTS -->
@include('Template.script')

</body>
</html>

