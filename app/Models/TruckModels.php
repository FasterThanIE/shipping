<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TruckModels extends Model
{
    const TABLE = 'truck_models';

    protected $table = self::TABLE;

    const TYPE_TRUCK_EURO = 0;
    const TYPE_TRUCK_AMERICAN = 1;
}
