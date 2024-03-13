<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'info',
        'serial_no',
        'part_no',
        'entry_price',
        'price',
        'user_id',
    ];
}
