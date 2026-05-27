<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class res_article extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
        'points',
    ];
}
