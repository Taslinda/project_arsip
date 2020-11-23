<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkeluar extends Model
{
    protected $table = 'suratkeluars';
    protected $fillable = [
        'no_surat',
        'tgl_keluar',
        'ket',
        'file'
    ];
}
