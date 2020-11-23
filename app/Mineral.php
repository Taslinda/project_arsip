<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mineral extends Model
{
    protected $table = 'minerals';
    protected $guarded = [];

    public static function totalMineral() {
        return Mineral::count();
    }
}
