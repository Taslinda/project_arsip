<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hiburan extends Model
{
    protected $table = 'hiburans';
    protected $guarded = [];

    public static function totalHiburan() {
        return Hiburan::count();
    }
}
