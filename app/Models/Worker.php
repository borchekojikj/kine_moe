<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Worker extends Model
{

    public $fillable = [
        'first_name',
        'last_name',
        'bio'
    ];

    public $timestamps = false;
    // use HasFactory;


    // public function professions()
    // {
    //     return $this->belongsToMany(Profession::class);
    // }

    // public function contents()
    // {
    //     return $this->belongsToMany(Content::class, 'content_workers_professions')
    //         ->withPivot('profession_id');
    // }

    public function contents()
    {
        return $this->belongsToMany(Content::class, 'content_workers_professions')
            ->withPivot('profession_id');
    }

    /**
     * The professions that belong to the worker through contents.
     */
    public function professions()
    {


        return $this->belongsToMany(Profession::class);
    }


    public function ContentProfession()
    {
        return $this->belongsToMany(Profession::class, 'content_workers_professions')
            ->withPivot('content_id')
            ->distinct();
    }
}


// <!-- foreach($worker_professions as $profession){
//     $professionsWorker[ $worker->id] = $profession
//     } -->