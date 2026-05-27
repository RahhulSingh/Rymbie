<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blog_article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'image',
        'content',
        'category',
    ];
}
