<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reklame extends Model
{
    protected $table = 'reklames';
    protected $guarded = [];

    public static function totalReklame() {
        return Reklame::count();
    }
}
