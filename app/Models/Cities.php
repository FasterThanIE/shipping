<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    const TABLE = "cities";

    protected $fillable = [
        'name', 'state',
    ];
}
