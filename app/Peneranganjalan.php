<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peneranganjalan extends Model
{
    protected $table = 'peneranganjalans';
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
