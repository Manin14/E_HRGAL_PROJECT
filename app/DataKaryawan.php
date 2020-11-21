<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataKaryawan extends Model
{
    //
    protected $primaryKey = 'nik_karyawan';

    protected $fillable = ['nik_karyawan',
                           'golongan',
                           'jabatan_karyawan',
                           'department',
                           'nama_karyawan',
                           'no_ktp',
                           'alamat',
                           'no_telpon',
                           'jenis_kelamin',
                           'tempat_lahir',
                           'tanggal_lahir',
                           'agama',
                           'kewarganegaraan',
                           'pendidikan_terakhir',
                           'status_perkawinan',
                           'golongan_darah',
                           'bahasa',
                           'suku',
                           'daerah_asal',
                           'cabang_pt',
                           'nama_darurat',
                           'hubungan',
                           'alamat_darurat',
                           'no_telpon_darurat',
                           'dari_tahun',
                           'sampai_tahun',
                           'nama_perusahaan',
                           'jabatan',
                           'alasan',
                           'nama_ayah_kandung',
                           'nama_ibu_kandung',
                           'nama_saudara_kandung',
                           'nama_suami_istri',
                           'nama_anak_kandung'
                        ];

     protected $dates = ['tanggal_lahir'];
}
