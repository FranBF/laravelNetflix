<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuation extends Model
{
    public function video(){
        return $this->belongsToMany(Vide::class, 'id_video');
    }

    public function user(){
        return $this->belongsToMany(User::class, 'id_user');
    }
    use HasFactory;
}
