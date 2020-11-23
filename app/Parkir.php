<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parkir extends Model
{
    protected $table = 'parkirs';
    protected $guarded = [];

    public static function totalParkir() {
        return Parkir::count();
    }
}
