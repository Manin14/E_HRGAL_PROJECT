
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
     @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Buat Akun </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
      
      <div class="container">
        <div class="col-lg-8">
            <div class="page-header">
                 
            <form method="POST" action="{{ url('beranda') }}">
        {{ csrf_field() }}

             <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" name="name" class="form-control" id="exampleInputNama" aria-describedby="emailHelp" required>
               
            </div>
            <label for="exampleInputEmail1">Level</label>
               <select class="custom-select" name="level">
                    <option selected value="user">Karyawan/ User </option>
                    <option value="hrd">HRD</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="admin">Admin</option>
                </select>

            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                <small id="emailHelp" class="form-text text-muted">Minimal length 8 </small>
            </div>
           
            <button type="submit" class="btn btn-primary">Buat Akun</button>
        </form>
            </div>
        </div> 
      </div>
      
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@include('Template.script')

</body>
</html>
