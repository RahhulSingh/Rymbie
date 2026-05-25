<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class academic_services_section extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon',
        'title',
    ];
}
