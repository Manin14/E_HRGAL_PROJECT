<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cari </title>
</head>
<body>
    




    <div class="container">

   
       
    <br>
                          


           
            <!-- tabel kedua -->
            
           
           

            <table class="table scroll">
              <thead class="thead-dark">
                <tr>
                  <!-- <th scope="col">No </th>
                  <th scope="col">Nama Karyawan </th>
                  <th scope="col">Nik Karyawan</th>
                  <th scope="col">Golongan</th>
                  <th scope="col">Jabatan</th>
                  <th scope="col">Department</th>
                  <th scope="col">Nama Perusahaan</th>
                  <th scope="col">Aksi </th> -->
                </tr>
              </thead>
              <tbody>
              <?php $nomor = 1; ?>

              @foreach ($data as $ini)
                <tr>
                  <th scope="row">{{ $nomor++ }}</th>
                  <td>{{ $ini->nama_karyawan }}</td>
                  <td>{{ $ini->nik_karyawan }}</td>
                  <td>{{ $ini->golongan }}</td>
                  <td>{{ $ini->jabatan_karyawan }}</td>
                  <td>{{ $ini->department }}</td>
                  <td>{{ $ini->cabang_pt }}</td>
                  <td>
                    
                          <a href="{{ url('hapus') }}/{{ $ini->nik_karyawan }}" class="btn btn-danger btn-sm m-1" onclick="return confirm('yakin ingin hapus data nya')">
                              <i class="fas fa-trash-alt"></i>
                                   Hapus 
                           </a>
                       
                        <!-- <a href="" class="btn btn-warning">edit</a> -->
                        <!-- tombol edit -->
							      		<a href="{{ url('simpan') }}/{{ $ini->nik_karyawan }}/edit" class="btn btn-warning btn-sm m-1"> <i class="fa fa-edit" ></i>Edit </a>
                        
                        <!-- cetak data -->
							      		<a href="{{ url('cetak-perdata') }}/{{ $ini->nik_karyawan }}" target="_blank" class="btn btn-success btn-sm m-1">
                             <i class="fas fa-print"></i>
                                 Cetak 
                        </a>


                          <!-- detail -->
                          <a href="{{ url('detail') }}/{{ $ini->nik_karyawan }}"  class="btn btn-success  btn-sm m-1"> 
                           <i class="fas fa-info-circle"></i>
                               Detail 
                        </a>
                    
                    
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>




           
   


           


         
          
         

     
       <!-- akhir tabel data -->
    </div>

</body>
</html>