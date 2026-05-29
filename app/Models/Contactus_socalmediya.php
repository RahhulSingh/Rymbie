<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contactus_socalmediya extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'title',
        'content',
    ];
}
