<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function profiles()
    {
        return $this->belongsTo(Profile::class, "profile_id");
    }
}
