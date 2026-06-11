<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Favorite extends Model
{
    protected $fillable = [
        'user_id',
        'imdb_id',
        'title',
        'poster',
        'year',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}