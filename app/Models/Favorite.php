<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    public $fillable = ['profile', 'title', 'description', 'link', 'user_id'];

    public function user () {
        return $this->belongsTo(User::class);
    }
}