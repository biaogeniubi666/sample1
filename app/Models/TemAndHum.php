<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TemAndHum extends Model
{
    protected $fillable = [
    'id', 'tem', 'hum',
    ];
}
