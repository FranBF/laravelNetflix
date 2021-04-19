<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = ['video_id', 'user_id', 'motivo'];
    use HasFactory;
    public function userReporter()
    {
        return $this->belongsTo(User::class);
    }

    public function userReported()
    {
        return $this->belongsTo(User::class);
    }

    public function videos()
    {
        return $this->belongsTo(Video::class);
    }
}
