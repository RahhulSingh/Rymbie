<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class featured_article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
    ];
}
