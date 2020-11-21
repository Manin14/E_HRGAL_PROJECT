<!DOCTYPE html>
<html>
<head>
	<title> cetak perdata</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<style type="text/css">
   .kecil {
       width:50px;
       text-align:left;
   }
</style>
</head>
<body>

<h1 align="center" > Data Personal Karyawan </h1> <br> <br>

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


    
  
  
   <script type="text/javascript">
   	 window.print();
   </script>
</body>
</html>
