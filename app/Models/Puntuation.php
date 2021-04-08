<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuation extends Model
{
    protected $fillable=["puntuacion", "user_id", "video_id"];
    use HasFactory;

    public function video(){
        return $this->belongsTo(Vide::class, 'id_video');
    }

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }
    use HasFactory;
}
