<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clicks extends Model
{
    protected $fillable = ['perfil', 'link', 'title', 'description', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}