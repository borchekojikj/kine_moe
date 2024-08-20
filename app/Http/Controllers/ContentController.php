<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Worker;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function create()
    {
        $categories  = Category::all();
        $writers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'writer');
        })->get();

        $actors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'actor');
        })->get();

        $directors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'director');
        })->get();

        $producers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'producer');
        })->get();

        $cinematographers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'cinematographer');
        })->get();

        $editors = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'editor');
        })->get();
        $costume_designers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Costume designer');
        })->get();

        $hosts = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Host');
        })->get();
        $managers = Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Manager');
        })->get();

        $graphic_designers =  Worker::whereHas('professions', function ($query) {
            $query->where('title', 'Graphic Designer');
        })->get();
        return view('contents.create-content', compact('categories', 'writers', 'actors', 'directors', 'producers', 'cinematographers', 'editors', 'costume_designers', 'hosts', 'managers', 'graphic_designers'));
    }
}
