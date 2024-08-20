<?php

namespace App\Models;

use Doctrine\Inflector\Rules\Word;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public $timestamps = false;


    protected $fillable = [
        'title',
        'description',
        'content_link',
        'release_date',
        'content_type',
        'released',
        'photo_url',
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * The workers that belong to the content.
     */
    public function workers()
    {
        return $this->belongsToMany(Worker::class, 'content_workers_professions')
            ->withPivot('profession_id');
    }

    /**
     * The professions that belong to the content through workers.
     */
    public function professions()
    {
        return $this->belongsToMany(Profession::class, 'content_workers_professions')
            ->withPivot('worker_id');
    }

    public function writers()
    {
        return $this->workers()->whereHas('professions', function ($query) {
            $query->where('title', 'Writer');
        });
    }

    public function actors()
    {
        return $this->workers()->whereHas('professions', function ($query) {
            $query->where('title', 'actor');
        });
    }

    public function directors()
    {
        return $this->workers()->whereHas('professions', function ($query) {
            $query->where('title', 'director');
        });
    }

    public function get_content_type()
    {
        return $this->belongsTo(ContentType::class, 'content_type');
    }
}
