
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    @include('Template.head')
    
    <style>
    img{
        border-radius:10%;
        background-color:red;
    }

    h3{
        text-align:center
    }
    </style>
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
            <!-- <h1 class="m-0">halaman dua </h1> -->
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

     <!-- /.login-box alert -->
     <div class="col-md-3-mt-12">
          	 @if ($message = Session::get('success'))
		          <div class="alert alert-success alert-block">
		           <button type="button" class="close" data-dismiss="alert">×</button> 
		          <strong>{{ $message }}</strong>
		         </div>
		         @endif
          </div>


    <div class="container">

   
       
    <br>
          <!-- tabel ke tiga -->
          <h2> Form Lembur </h2>

         <div class="container">
          
         </div>
          

           


         
          
         

     
       <!-- akhir tabel data -->
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


