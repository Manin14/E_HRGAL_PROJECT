<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Calendar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/plugins/fullcalendar/main.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('AdminLTE/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
 <!-- Navbar -->
     @include('Template.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('Template.sidebar')

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="sticky-top mb-3">
              <div class="card">
               
                <div class="card-body">
                 <!-- isi nya disinni  -->
                 <a href="{{ url('halaman-dua') }}" class="btn btn-warning"> 
                    <i class="fas fa-backward"></i>
                       Kembali 
                 </a>

                    <h1 align="center"> Detail Data Karyawan</h1>


<div class="container" align="center" >
   <table  cellpadding="0" cellspacing="0">
     <thead>
       <tr>
         <th> </th>
         <th> </th>
         <th> </th>
         <th> </th>
        </tr>
     </thead>
     @foreach ($data as $sss)

       
         <!-- batas -->
         <tr>
          <td></td>
          <td>    <br> <strong> Data Karyawan : </strong></td>
          <td>  </td>
          <td></td>
          <tr>


        <tr>
          <td></td>
          <td>NIK</td>
          <td> : </td>
          <td>{{ $sss->nik_karyawan }}</td>
        </tr>

        <tr>
          <td></td>
          <td>Nama</td>
          <td> : </td>
          <td>{{ $sss->nama_karyawan }}</td>
        </tr>

        <tr>
          <td></td>
          <td>No KTP</td>
          <td> : </td>
          <td>{{ $sss->no_ktp }}</td>
        </tr>
        <tr>
          <td></td>
          <td>Alamat</td>
          <td> : </td>
          <td>{{ $sss->alamat }}</td>
        </tr>
        <tr>
          <td></td>
          <td>No Telpon</td>
          <td> : </td>
          <td>{{ $sss->no_telpon }}</td>
        </tr>
        <tr>
          <td></td>
          <td>Jenis Kelamin</td>
          <td> : </td>
          <td>{{ $sss->jenis_kelamin }}</td>
        </tr>
        <tr>
          <td></td>
          <td>Tempat Lahir</td>
          <td> : </td>
          <td>{{ $sss->tempat_lahir }}</td>
        </tr>

         <tr>
          <td></td>
          <td>Tanggal Lahir</td>
          <td> : </td>
          <td>{{ $sss->tanggal_lahir }}</td>
          <tr>

          </tr>

          <td></td>
          <td>Agama</td>
          <td> : </td>
          <td>{{ $sss->agama }}</td>
        </tr>
       
         <tr>
          <td></td>
          <td>Kewarganegaraan</td>
          <td> : </td>
          <td>{{ $sss->kewarganegaraan }}</td>
          <tr>

          <tr>
          <td></td>
          <td>Pendidikan Terakhir</td>
          <td> : </td>
          <td>{{ $sss->pendidikan_terakhir }}</td>
          <tr>

          <tr>
          <td></td>
          <td>Status Perkawinan</td>
          <td> : </td>
          <td>{{ $sss->status_perkawinan }}</td>
          <tr>

          <tr>
          <td></td>
          <td>Golongan Darah</td>
          <td> : </td>
          <td>{{ $sss->golongan_darah }}</td>
          <tr>

          <tr>
          <td></td>
          <td>Bahasa</td>
          <td> : </td>
          <td>{{ $sss->bahasa }}</td>
          <tr>
        
          <tr>
          <td></td>
          <td>Suku</td>
          <td> : </td>
          <td>{{ $sss->suku }}</td>

          <tr>
          <td></td>
          <td>Daerah Asal</td>
          <td> : </td>
          <td>{{ $sss->daerah_asal }}</td>
          <tr>
          <tr>

          <tr>
          <td></td>
          <td>Bekerja di Cabang</td>
          <td> : </td>
          <td>{{ $sss->cabang_pt }}</td>
          <tr>
           
          
         <!-- batas -->
         <tr>
          <td></td>
          <td>    <br> <strong> Kontak Darurat : </strong></td>
          <td>  </td>
          <td></td>
          <tr>
          
          <tr> 
          <td></td>
          <td>Nama</td>
          <td> : </td>
          <td>{{ $sss->nama_darurat }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Hubungan</td>
          <td> : </td>
          <td>{{ $sss->hubungan }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Alamat</td>
          <td> : </td>
          <td>{{ $sss->alamat_darurat }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>No Telpon</td>
          <td> : </td>
          <td>{{ $sss->no_telpon_darurat }}</td>
          <tr>

          
         <!-- batas -->
         <tr>
          <td></td>
          <td>    <br> <strong> Pengalaman Kerja : </strong></td>
          <td>  </td>
          <td></td>
          <tr>

          <tr> 
          <td></td>
          <td>Dari Tahun</td>
          <td> : </td>
          <td>{{ $sss->dari_tahun }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Sampai Tahun</td>
          <td> : </td>
          <td>{{ $sss->sampai_tahun }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Nama Perusahaan</td>
          <td> : </td>
          <td>{{ $sss->nama_perusahaan }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Jabatan</td>
          <td> : </td>
          <td>{{ $sss->jabatan }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Alasan Keluar</td>
          <td> : </td>
          <td>{{ $sss->alasan }}</td>
          <tr>

          
          
         <!-- batas -->
         <tr>
          <td></td>
          <td>    <br> <strong> Data Keluarga : </strong></td>
          <td>  </td>
          <td></td>
          <tr>

          <tr> 
          <td></td>
          <td>Nama Ayah Kandung</td>
          <td> : </td>
          <td>{{ $sss->nama_ayah_kandung }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Nama Ibu Kandung</td>
          <td> : </td>
          <td>{{ $sss->nama_ibu_kandung}}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Nama Saudara Kandung</td>
          <td> : </td>
          <td>{{ $sss->nama_saudara_kandung }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Nama Suami / Istri</td>
          <td> : </td>
          <td>{{ $sss->nama_suami_istri }}</td>
          <tr>

          <tr> 
          <td></td>
          <td>Nama Anak Kandung</td>
          <td> : </td>
          <td>{{ $sss->nama_anak_kandung }}</td>
          <tr>

             
         <!-- batas -->
         <tr>
          <td></td>
          <td>    <br> <strong>  </strong></td>
          <td>  </td>
          <td></td>
          <tr>
        @endforeach
     <tbody>
     </tbody>


   </table>
</div>
                  
                </div>
                <!-- /.card-body -->
                 
                
              </div>
              <!-- /.card -->
              
              
                
            </div>
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  

</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- jQuery UI -->
<script src="{{ asset('AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('AdminLTE/dist/js/adminlte.min.js') }}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{ asset('AdminLTE/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('AdminLTE/plugins/fullcalendar/main.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('AdminLTE/dist/js/demo.js') }}"></script>
<!-- Page specific script -->

</body>
</html>
