<?php

namespace App\Http\Controllers;
use App\DataKaryawan;

use App\Imports\DataKaryawanImport;
use App\Exports\DataKaryawanExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class DataKaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request);

       

        $data =  new DataKaryawan;

        $data->nik_karyawan = $request->nik_karyawan;
        $data->nama_karyawan = $request->nama_karyawan;
        $data->golongan = $request->golongan;
        $data->jabatan_karyawan = $request->jabatan_karyawan;
        $data->department = $request->department;
        $data->no_ktp = $request->no_ktp;
        $data->alamat = $request->alamat;
        $data->no_telpon = $request->no_telpon;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->agama = $request->agama;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->status_perkawinan = $request->status_perkawinan;
        $data->golongan_darah = $request->golongan_darah;
        $data->bahasa = $request->bahasa;
        $data->suku = $request->suku;
        $data->daerah_asal = $request->daerah_asal;
        $data->cabang_pt = $request->cabang_pt;

        $data->nama_darurat = $request->nama_darurat;
        $data->hubungan = $request->hubungan;
        $data->alamat_darurat = $request->alamat_darurat;
        $data->no_telpon_darurat = $request->no_telpon_darurat;
        $data->dari_tahun = $request->dari_tahun;
        $data->sampai_tahun = $request->sampai_tahun;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->jabatan = $request->jabatan;
        $data->alasan = $request->alasan;

        $data->nama_ayah_kandung = $request->nama_ayah_kandung;
        $data->nama_ibu_kandung = $request->nama_ibu_kandung;
        $data->nama_saudara_kandung = $request->nama_saudara_kandung;
        $data->nama_suami_istri = $request->nama_suami_istri;
        $data->nama_anak_kandung = $request->nama_anak_kandung;

        //dd($data);
        $data->save();

        return redirect('halaman-dua')->with(['success' => 'Data baru  Berhasil Disimpan']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   

    // funntion edit
    public function edit($id) {
        $data = DataKaryawan ::where('nik_karyawan', $id)->first();
        
        // oper data nay dengan compact
        return view('HalamanDataKaryawan.edit', compact('data')); //ada di folder laundry nama file nya edit.balde.php
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     // buat controller update
     public function update(Request $request, $id) {
         
        $data = DataKaryawan ::where('nik_karyawan', $id)->first();
 
        $data->nik_karyawan = $request->nik_karyawan;
        $data->nama_karyawan = $request->nama_karyawan;
        $data->no_ktp = $request->no_ktp;
        $data->alamat = $request->alamat;
        $data->no_telpon = $request->no_telpon;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->agama = $request->agama;
        $data->kewarganegaraan = $request->kewarganegaraan;
        $data->pendidikan_terakhir = $request->pendidikan_terakhir;
        $data->status_perkawinan = $request->status_perkawinan;
        $data->golongan_darah = $request->golongan_darah;
        $data->bahasa = $request->bahasa;
        $data->suku = $request->suku;
        $data->daerah_asal = $request->daerah_asal;
        $data->cabang_pt = $request->cabang_pt;

        $data->nama_darurat = $request->nama_darurat;
        $data->hubungan = $request->hubungan;
        $data->alamat_darurat = $request->alamat_darurat;
        $data->no_telpon_darurat = $request->no_telpon_darurat;
        $data->dari_tahun = $request->dari_tahun;
        $data->sampai_tahun = $request->sampai_tahun;
        $data->nama_perusahaan = $request->nama_perusahaan;
        $data->jabatan = $request->jabatan;
        $data->alasan = $request->alasan;

        $data->nama_ayah_kandung = $request->nama_ayah_kandung;
        $data->nama_ibu_kandung = $request->nama_ibu_kandung;
        $data->nama_saudara_kandung = $request->nama_saudara_kandung;
        $data->nama_suami_istri = $request->nama_suami_istri;
        $data->nama_anak_kandung = $request->nama_anak_kandung;
 
        $data->update(); //lalu update
 
         // lalu redirect lagi
         return redirect('halaman-dua')->with(['success' => 'Data   Berhasil Diupdate']);
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     // controller hapus
     public function hapus ($id) {
          //dd($id);

        // ambil data yang id nya $id
       //$data = DataKaryawan::where('nik_karyawan', $id)->first();
       //dd($data);
       $data = DataKaryawan::findorfail($id);
       
       // lalu hapus
       $data->delete();

       // lalu redirect lagi
       return redirect('halaman-dua')->with(['success' => 'Data   Berhasil Dihapus']);
    }


    // controller cetak perdata
    public function perdata($id){

      
          $data = DataKaryawan ::where('nik_karyawan', $id)->get();
         //dd($siswas);
         return view('CetakData.cetak-perdata',compact('data'));
       }


       // cari
    public function search(Request $request){
        $query = $request->get('searchlaundry');
      
 
         if($request->ajax()){
 
                 $laundry= DataKaryawan::where('nama_karyawan','LIKE','%'.$request->searchlaundry."%")->get();
                 
                 // desc 
                 $sorted = $laundry->sortByDesc('id');
                 $data = $sorted;
 
                  return view('PencarianData.halamanCariData', compact('data', 'query'));
 
                            }
                    }


    //fungsi export ke excell 
     public function export_excel()
             {
                   return Excel::download(new DataKaryawanExport, 'Data_karyawan.xlsx');
             }
 
             
    // fungsi import excell
    public function import_data (Request $request){

         
        // validasi, file harus xlsx
		$this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
            
        ]);
        
        // menangkap file excel
     $file = $request->file('file');
    
     // membuat nama file unik
     $nama_file = $file->getClientOriginalName();

     // upload ke folder file_siswa di dalam folder public
     $file->move('file_karyawan',$nama_file);

    // import data
     Excel::import(new DataKaryawanImport, public_path('/file_karyawan/'.$nama_file));
                  
    // alihkan halaman kembali
     return redirect('halaman-dua')->with(['success' => 'Data   Berhasil Di Import']);

    }


    // fungsi detail
    public function detail($id){
        $data = DataKaryawan::where('nik_karyawan', $id)->get();

         return view('DetailData.index',compact('data'));

  }

}
