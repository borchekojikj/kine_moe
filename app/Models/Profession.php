<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use HasFactory;
    public $fillable = ['title'];

    public $timestamps = false;
    // use HasFactory;

    // public function workers()
    // {
    //     return $this->belongsToMany(Worker::class);
    // }


    /**
     * The workers that belong to the profession.
     */
    public function workers()
    {
        return $this->belongsToMany(Worker::class, 'content_workers_professions')
            ->withPivot('content_id');
    }

    /**
     * The contents that belong to the profession.
     */
    public function contents()
    {
        return $this->belongsToMany(Content::class, 'content_workers_professions')
            ->withPivot('worker_id');
    }
}
