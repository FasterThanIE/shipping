<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stations extends Model
{
    const TABLE = "stations";

    protected $fillable = [
        'user_id', 'city_id', 'deliveries', 'active', 'size',
    ];

    protected $table = self::TABLE;
}
