<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\User;

class Link extends Model
{
    use HasFactory;

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
