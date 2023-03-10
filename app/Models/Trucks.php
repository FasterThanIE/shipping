<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trucks extends Model
{
    const TABLE = 'trucks';
    protected $table = self::TABLE;

    protected $fillable = [
        'user_id',
        'model_id',
        'station_id',
        'is_active',
        'mileage',
        'mileage_last_service',
        'mileage_next_service',
    ];
}
