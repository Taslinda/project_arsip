<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratkeputusan extends Model
{
    protected $table = 'suratkeputusans';
    protected $fillable = [
        'no_surat',
        'tgl_sk',
        'ket',
        'file'
    ];
}
