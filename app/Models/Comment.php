<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    // Comment belongs to Posts
    public function posts()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    // Comment belongs to Users
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
