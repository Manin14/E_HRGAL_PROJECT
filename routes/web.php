<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
 //route reg awal halaman, inseert data akun 
 Route::post('reg', 'BerandaController@store'); 

=======
   //route regis
    //Route::get('/registrasi','BerandaController@registrasi')->name('registrasi');
    
    //route reg awal halaman, inseert data akun 
    Route::post('reg', 'BerandaController@store'); //method post buat insert data
    //Route::post('beranda', 'BerandaController@store'); //method post buat insert data
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663

//route beranda tanpa controller
// Route::get('/beranda', function () {
//     return view('beranda');
// });

//level admin bisa akses semua halaman
Route::group(['middleware' => ['auth','CekLevel:admin']], function (){
    //route beranda dengan  controller
    Route::get('/beranda','BerandaController@index');

<<<<<<< HEAD
    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
    Route::get('/halaman-tiga','BerandaController@halamantiga')->name('halaman-tiga');
    Route::get('/halaman-empat','BerandaController@halamanempat')->name('halaman-empat');
    Route::get('/halaman-lima','BerandaController@halamanlima')->name('halaman-lima');
    Route::get('/halaman-enam','BerandaController@halamanenam')->name('halaman-enam');

    //   route export excell data karyawan
     Route::get('data-karyawan-export-excel', 'DataKaryawanController@export_excel')->name('export-data');

    //  route import data karyawan
     Route::post('import_excel', 'DataKaryawanController@import_data')->name('import-nya');

    //  route upload gambar
    Route::post('upload', 'BerandaController@proses_upload');

    // route detail
    Route::get('detail/{id}','DataKaryawanController@detail')->name('detail');

    // route create foto
    Route::get('create-foto', 'DataFotoController@create');
    // route simpan gambar
    Route::post('simpan-gambar', 'DataFotoController@store');
    // route delete gambar
    Route::get('delete-gambar/{id_gambar}', 'DataFotoController@destroy')->name('delete-gambar');


    // route hapus user
    Route::get('hapus-user/{id}', 'UserController@destroy');
    // routr edit user
     Route::get('edit-user/{id}', 'UserController@edit');
    //  route buat user/ akun
    Route::get('buat-akun', 'UserController@buat_akun');
    // route update data akun
     Route::put('update-data-akun/{id}', 'UserController@update');


    //  route form input data lembur
    Route::get('form-lembur','DataLemburAController@index')->name('form-lembur');

=======
    //route regis
   // Route::get('/registrasi','BerandaController@registrasi')->name('registrasi');

    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
    Route::get('/halaman-dua','BerandaController@halamandua')->name('halaman-dua');
>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
});


//level user hanya bisa akses beranda dan halaman satu
Route::group(['middleware' => ['auth','CekLevel:admin,user']], function (){
    //route beranda dengan  controller
    Route::get('/beranda','BerandaController@index');

<<<<<<< HEAD
=======
    //route regis
   // Route::get('/registrasi','BerandaController@registrasi')->name('registrasi');

    

>>>>>>> 1b2233ef9f1e7ef3c1534d969abab90b4e2ec663
    Route::get('/halaman-satu','BerandaController@halamansatu')->name('halaman-satu');
   
});



//route login
Route::get('/login', function () {
    return view('Pengguna.Login');
})->name('login');

//route login k belum jalan beranda
Route::post('/postlogin', 'LoginController@postlogin')->name('postlogin');

//route logout
Route::get('/logout', 'LoginController@logout')->name('logout');

// route simpan data
Route::post('/simpan', 'DataKaryawanController@store')->name('simpan');

// route edit
Route::get('simpan/{id}/edit', 'DataKaryawanController@edit');


// route update
Route::put('update/{id}', 'DataKaryawanController@update');

// buat route delete data 
//Route::delete('simpan/{id}', 'DataKaryawanController@hapus');

// buat route delete data 
Route::get('hapus/{nik_karyawan}', 'DataKaryawanController@hapus');

 // route cetak  per data
 Route::get('cetak-perdata/{id}', 'DataKaryawanController@perdata');

  // route cari data jquery
  Route::get('searchlaundry', 'DataKaryawanController@search');


//   route status input pengajuan lembur
Route::get('status', 'StatusController@index')->name('status');

