<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class assignment_brief extends Model
{
    protected $fillable = [ 'user_id', 'brief_file', 'photo', 'extra_instructions', 'deadline', 'subject', ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

