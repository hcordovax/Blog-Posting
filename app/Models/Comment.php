<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = ['post_id', 'user_id', 'content'];

    public function post (){
        return $this->hasOne(Post::class, 'id', 'post_id');
    }

    public function user(){
        return $this->hasOne(User::class, 'id','user_id');
    }
}
