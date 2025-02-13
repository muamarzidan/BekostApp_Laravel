<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilikost extends Model
{
    use HasFactory;
    protected $fillable = [
        'bathroom',
        'kitchen',
        'mattress',
        'cupboard',
        'icebox',
        'wifi',
    ];
}
