<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peneranganjalan extends Model
{
    protected $table = 'peneranganjalans';
    protected $guarded = [];

    public static function totalPeneranganjalan() {
        return Peneranganjalan::count();
    }
}
