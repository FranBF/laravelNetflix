<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
    public function userReporter(){
        return $this->belongsToMany(User::class, 'id_user_reportador');
    }

    public function userReported(){
        return $this->belongsToMany(User::class, 'id_user_reportado');
    }
}
