<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // Post has many comments
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // Post belongs to users
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
