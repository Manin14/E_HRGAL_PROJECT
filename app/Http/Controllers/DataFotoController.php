<?php

namespace App\Http\Controllers;
use App\DataFoto;

use Illuminate\Http\Request;

class DataFotoController extends Controller
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
        return view('DataFoto.file_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $nm = $request->file;
        $namaFile = time().rand(100,999).".".$nm->getClientOriginalExtension();

         $data = new DataFoto;
          $data->keterangan = $request->keterangan;
          $data->file = $namaFile;

        $nm->move(public_path().'/img',$namaFile);
        $data->save();

       return redirect('halaman-tiga')->with(['success' => 'Data baru  Berhasil Disimpan']);
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // fungsi delete foto
    public function destroy ($id){
        // dd($id);
   
           $hapus = DataFoto::findorfail($id);
   
           $file = public_path('/img/').$hapus->file;
   
   
           // cek jika ada gambar
           if (file_exists($file)) {
               @unlink($file);
           }
   
   
           // hapus data di database
           $hapus->delete();
           return back()->with(['success' => 'Data Berhasil Dihapus']);
       }
}
