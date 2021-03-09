<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable=["content", "id_user", "id_video"];
    use HasFactory;

    public function user(){
        return $this->belongsToMany(User::class,'id_user');
    }

    public function video(){
        return $this->belongsToMany(Video::class,'id_video');
    }
}
