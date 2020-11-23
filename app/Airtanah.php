<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airtanah extends Model
{
    protected $table = 'airtanahs';
    protected $guarded = [];

    public static function totalAirtanah() {
        return Airtanah::count();
    }
}
