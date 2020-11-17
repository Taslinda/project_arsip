<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiburan extends Model
{
    protected $table = 'hiburans';
    protected $fillable = [
        'lokasi',
        'tgl_registrasi',
        'tgl_pendataan',
        'nama_pemilik',
        'no_ktp',
        'no_npwp',
        'alamat_pemilik',
        'bidang_pajak',
        'nama_usaha',
        'alamat_usaha',
        'no_npwpd',
        'file_upload'
    ];
}
