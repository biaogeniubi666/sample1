<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// Model模型
class Serial extends Model
{
    protected $fillable = [
        'id', 'data', 'time',
    ];
}
