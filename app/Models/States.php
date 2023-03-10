<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class States extends Model
{
    const TABLE = "states";

    protected $fillable = [
        'name', 'country'
    ];
}
