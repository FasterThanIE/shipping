<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    const TABLE = "companies";

    protected $fillable = [
        'name', 'description', 'address', 'phone', 'email',
        'website', 'logo', 'employees', 'user_id', 'city_id',
    ];
}
