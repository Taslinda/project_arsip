<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mineral extends Model
{
    protected $table = 'minerals';
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
