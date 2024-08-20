<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discussion extends Model
{
    use HasFactory;

    public $fillable = ['title', 'content_id', 'user_id', 'description', 'created_at', 'updated_at'];
    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function content()
    {
        return $this->belongsTo(Content::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function engagements()
    {
        return $this->hasMany(Engagement::class);
    }
}
