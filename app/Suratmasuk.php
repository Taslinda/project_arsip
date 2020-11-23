<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    protected $table = 'suratmasuks';
    protected $fillable = [
        'no_surat',
        'tgl_masuk',
        'ket',
        'file'
    ];
}
