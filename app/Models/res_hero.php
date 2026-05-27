<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class res_hero extends Model
{
    use HasFactory;

    protected $table = 'res_heroes';

    protected $fillable = [
        'title',
        'description',
        'image',
    ];
}