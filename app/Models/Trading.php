<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trading extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'ltp',
        'high',
        'low',
        'close_price',
        'ycp',
        'change',
        'trade',
        'value_mn',
        'volume'
    ];
}
