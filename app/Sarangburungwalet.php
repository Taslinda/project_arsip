<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sarangburungwalet extends Model
{
    protected $table = 'sarangburungwalets';
    protected $guarded = [];

    public static function totalSarangburungwalet() {
        return Sarangburungwalet::count();
    }
}
