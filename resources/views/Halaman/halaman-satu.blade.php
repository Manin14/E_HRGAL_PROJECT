
<<<<<<< HEAD

=======
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
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
<<<<<<< HEAD
            <h1 class="m-0">Form Data Karyawan  </h1>
=======
            <h1 class="m-0">Form Pengajuan Lembur  </h1>
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li> -->
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
                  
            <!-- <h1> halaman satu form lembur </h1> -->
       
<<<<<<< HEAD
            <form method="POST" action="{{ route('simpan') }}">
            @csrf
            
             <div class="form-group row">
                <label for="nik_karyawan" class="col-sm-2 col-form-label"  >NIK Karyawan</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nik_karyawan" name="nik_karyawan" required >
                </div>
              </div>

              <div class="form-group row">
                <label for="nama_karyawan" class="col-sm-2 col-form-label" >Nama Karyawan </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_karyawan"  name="nama_karyawan"  required="">
                </div>
              </div>

              <div class="form-group row">
                <label for="golongan" class="col-sm-2 col-form-label"  > Golongan Karyawan </label>
                <div class="col-sm-10">
                    <select name="golongan" class="form-control" > 
                      <option value='5' selected="selected">5</option>
                      <option value='6'>6</option>
                      <option value='7'>7</option>
                      <option value='8'>8</option>
                      <option value='9'>9</option>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="jabatan_karyawan" class="col-sm-2 col-form-label"  > Jabatan Karyawan </label>
                <div class="col-sm-10">
                    <select name="jabatan_karyawan" class="form-control"> 
                      <option value='Manager' selected="selected">Manager</option>
                      <option value='Supervisor'>supervisor</option>
                      <option value='Officer'>officer</option>
                      <option value='Senior Manager'>Senior Manager</option>
                      <option value='Staff'>Staff</option>
                      <option value='Operator'>Operator</option>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="department" class="col-sm-2 col-form-label"  > Department </label>
                <div class="col-sm-10">
                    <select name="department" class="form-control"> 
                      <option value='Finance Accounting' selected="selected">Finance Accounting</option>
                      <option value='Trade Marketing'>Trade Marketing</option>
                      <option value='Production'>Production</option>
                      <option value='Logistic'>Logistic</option>
                      <option value='Quality Control'>Quality Control</option>
                      <option value='Maintenance'>Maintenance</option>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="no_ktp" class="col-sm-2 col-form-label" > No KTP </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_ktp" name="no_ktp" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="alamat" class="col-sm-2 col-form-label" > Alamat </label>
                <div class="col-sm-10">
                <textarea class="form-control" id="alamat" rows="3" name="alamat" required></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="no_telpon" class="col-sm-2 col-form-label"  > No Telpon </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_telpon" name="no_telpon" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="jenis_kelamin" class="col-sm-2 col-form-label" > Jenis Kelamin </label>
                <div class="col-sm-10">
                   <div class="form-check">
                      <input class="form-check-input" type="radio" name="jenis_kelamin"  id="exampleRadios1" value="Pria" checked>
                      <label class="form-check-label" for="exampleRadios1">
                      Pria
                      </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin"  id="exampleRadios1" value="Wanita" checked>
                        <label class="form-check-label" for="exampleRadios1">
                         Wanita
                        </label>
                    </div>

                </div>
              </div>

              <div class="form-group row">
                <label for="tempat_lahir" class="col-sm-2 col-form-label"  > Tempat Lahir </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="tanggal_lahir" class="col-sm-2 col-form-label" > Tanggal Lahir </label>
                <div class="col-sm-10">
                     <input type="date" name="tanggal_lahir" class="form-control" required> 
=======
            <form>
             <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
                </div>
              </div>

              <div class="form-group row">
<<<<<<< HEAD
                <label for="agama" class="col-sm-2 col-form-label"  > Agama </label>
                <div class="col-sm-10">
                    <select name="agama" class="form-control"> 
                      <option value='islam' selected="selected">Islam</option>
                      <option value='kristen'>Kristen</option>
                      <option value='katholik'>Katholik</option>
                      <option value='hindu'>Hindu</option>
                      <option value='kristen'>Budha</option>
                    </select>
=======
                <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
                </div>
              </div>

              <div class="form-group row">
<<<<<<< HEAD
                <label for="kewarganegaraan" class="col-sm-2 col-form-label"  > Kewarganegaraan </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="kewarganegaraan" name="kewarganegaraan" required>
=======
                <label for="inputPassword" class="col-sm-2 col-form-label">Divisi </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
                </div>
              </div>

              <div class="form-group row">
<<<<<<< HEAD
                <label for="pendidikan_terakhir" class="col-sm-2 col-form-label"  > Pendidikan Terakhir</label>
                <div class="col-sm-10">
                   <select name='pendidikan_terakhir' class="form-control"> 
                      <option value='SD'>SD</option>
                      <option value='SMP'>SMP</option>
                      <option value='SMA Sederajat'>SMA Sederajat</option>
                      <option value='D3'>D3</option>
                      <option value='S1'>S1</option>
                      <option value='S2'>S2</option>
                    </select>
                </div>
              </div>

            <div class="form-group row">
                <label for="status_perkawinan" class="col-sm-2 col-form-label"  >  Status Perkawinan </label>
                <div class="col-sm-10">
                   <select name='status_perkawinan' class="form-control"> 
                      <option value='Kawin'> Kawin </option>
                      <option value='Belum Kawin'>Belum Kawin</option>
                      <option value='Cerai Hidup'> Cerai Hidup</option>
                      <option value='Cerai Mati'> Cerai Mati</option>
                    </select>
=======
                <label for="inputPassword" class="col-sm-2 col-form-label"> Usia </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword">
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
                </div>
              </div>

              <div class="form-group row">
<<<<<<< HEAD
                <label for="golongan_darah" class="col-sm-2 col-form-label"  >  Golongan Darah </label>
                <div class="col-sm-10">
                   <select name='golongan_darah' class="form-control"> 
                      <option value='A'> A </option>
                      <option value='B'> B </option>
                      <option value='AB'>  AB </option>
                      <option value='O'> O </option>
                    </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="bahasa" class="col-sm-2 col-form-label"  > Bahasa </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cabang_pt" name="bahasa" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="suku" class="col-sm-2 col-form-label"  > Suku  </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cabang_pt" name="suku" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="daerah_asal" class="col-sm-2 col-form-label"  > Daerah Asal  </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cabang_pt" name="daerah_asal" required>
                </div>
              </div>

              <!-- <div class="form-group row">
                <label for="cabang_pt" class="col-sm-2 col-form-label"  > Cabang PT</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="cabang_pt" name="cabang_pt">
                </div>
              </div> -->

              
              <div class="form-group row">
                <label for="cabang_pt" class="col-sm-2 col-form-label"  > Cabang PT </label>
                <div class="col-sm-10">
                    <select name="cabang_pt" class="form-control"> 
                      <option value='PT Tiga Pilar Sejahtera Food TBK' selected="selected">PT Tiga Pilar Sejahtera Food TBK</option>
                      <option value='PT Tiga Pilar Sejahtera '>PT Tiga Pilar Sejahtera </option>
                      <option value='PT Putra Power Nusantara'>PT Putra Power Nusantara</option>
                      <option value='PT Paly Meditra Indonesia'>PT Paly Meditra Indonesia</option>
                      <option value='PT Putra Taro Paloma '>PT Putra Taro Paloma </option>
                      <option value='PT Subafood Pangan Jaya '>PT Subafood Pangan Jaya</option>
                    </select>
                </div>
              </div>

            
              <h2> Yang Dapat Dihubungi Dalam Keadaan Darurat : </h2>

              <div class="form-group row">
                <label for="nama_darurat" class="col-sm-2 col-form-label"  > Nama  </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_darurat" name="nama_darurat" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="hubungan" class="col-sm-2 col-form-label"  > Hubungan   </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="hubungan" name="hubungan" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="alamat_darurat" class="col-sm-2 col-form-label"  > Alamat   </label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="alamat" rows="3" name="alamat_darurat" required></textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="no_telpon_darurat" class="col-sm-2 col-form-label"  > No Telpon   </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="no_telpon_darurat" name="no_telpon_darurat" required>
                </div>
              </div>

              <h2> Pengalaman Kerja </h2>

              <div class="form-group row">
                <label for="dari_tahun" class="col-sm-2 col-form-label"  > Dari Tahun   </label>
                <div class="col-sm-10">
                   <input type="date" name="dari_tahun" name="tanggal" class="form-control" required>
                </div>
              </div>   

               <div class="form-group row">
                <label for="sampai_tahun" class="col-sm-2 col-form-label"  > Sampai Tahun   </label>
                <div class="col-sm-10">
                   <input type="date" name="sampai_tahun" class="form-control" required>
                </div>
              </div>  

              <div class="form-group row">
                <label for="nama_perusahaan" class="col-sm-2 col-form-label" > Nama Perusahaan   </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" required>
                </div>
              </div> 

              <div class="form-group row">
                <label for="jabatan" class="col-sm-2 col-form-label" > Jabatan   </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="jabatan"  name="jabatan" required>
                </div>
              </div>

               <div class="form-group row">
                <label for="alasan" class="col-sm-2 col-form-label"  > Alasan Berhenti   </label>
                <div class="col-sm-10">
                   <textarea class="form-control" id="alamat" name="alasan" rows="3" required></textarea>
                </div>
              </div> 


              

                <!--data keluarga  -->
                <h2> Data Keluarga :</h2>
              

              <div class="form-group row">
                <label for="nama_ayah_kandung" class="col-sm-2 col-form-label"  > Nama Ayah kandung </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_ayah_kandung" name="nama_ayah_kandung" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="nama_ibu_kandung" class="col-sm-2 col-form-label"  > Nama Ibu kandung </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_ibu_kandung" name="nama_ibu_kandung" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="nama_saudara_kandung" class="col-sm-2 col-form-label"  > Nama Saudara kandung </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_saudara_kandung" name="nama_saudara_kandung" required> 
                  <small id="Help" class="form-text text-muted"> Tambahkan koma jika lebih dari satu </small>
                </div>
              </div>

              <div class="form-group row">
                <label for="nama_suami_istri" class="col-sm-2 col-form-label"  > Nama Suami / Istri </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_suami_istri" name="nama_suami_istri" required>
                </div>
              </div>

              <div class="form-group row">
                <label for="nama_anak_kandung" class="col-sm-2 col-form-label"  > Nama Anak kandung </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="nama_anak_kandung" name="nama_anak_kandung" required>
                  <small id="Help" class="form-text text-muted"> Tambahkan koma jika lebih dari satu </small>
                </div>
              </div>


              <div class="form-group row">
                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                   <button type="submit" class="btn btn-primary  btn-lg btn-block"> 
                      <i class="fas fa-paper-plane"></i>
                         Submit
                    </button>
=======
                <label for="inputPassword" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <a href="{{ url('/')}}" class="btn btn-block btn-primary">
                  Submit
                </a>
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
                </div>
              </div>


               

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
