<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class services_section extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'svg_icon',
    ];
}
