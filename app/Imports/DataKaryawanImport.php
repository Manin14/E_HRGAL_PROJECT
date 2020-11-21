<?php

namespace App\Imports;

use App\DataKaryawan;
use Maatwebsite\Excel\Concerns\ToModel;

class DataKaryawanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new DataKaryawan([
            //

            'nik_karyawan' => $row [0],
            'golongan' => $row [1],
            'jabatan_karyawan' => $row [2],
            'department' => $row [3],
            'nama_karyawan' => $row [4],
            'no_ktp' => $row [5],
            'alamat' => $row [6],
            'no_telpon' => $row [7],
            'jenis_kelamin' => $row [8],
            'tempat_lahir' => $row [9],
            'tanggal_lahir' => $row [10],
            'agama' => $row [11],
            'kewarganegaraan' => $row [12],
            'pendidikan_terakhir' => $row [13],
            'status_perkawinan' => $row [14],
            'golongan_darah' => $row [15],
            'bahasa' => $row [16],
            'suku' => $row [17],
            'daerah_asal' => $row [18],
            'cabang_pt' => $row [19],
            'nama_darurat' => $row [20],
            'hubungan' => $row [21],
            'alamat_darurat' => $row [22],
            'no_telpon_darurat' => $row [23],
            'dari_tahun' => $row [24],
            'sampai_tahun' => $row [25],
            'nama_perusahaan' => $row [26],
            'jabatan' => $row [27],
            'alasan' => $row [28],
            'nama_ayah_kandung' => $row [29],
            'nama_ibu_kandung' => $row [30],
            'nama_saudara_kandung' => $row [31],
            'nama_suami_istri' => $row [32],
            'nama_anak_kandung' => $row [33]    
        ]);
    }
}
