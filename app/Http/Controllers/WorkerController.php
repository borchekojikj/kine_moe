<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $workers = Worker::all();

        return view('/workers.view-workers', compact('workers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $professions = Profession::all();
        return view('workers.create-workers', compact('professions'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $workerData = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            "bio" => $request->bio
        ];
        $worker = Worker::create($workerData);

        $profession = $request->professions;

        foreach ($profession as $profession) {
            $worker->professions()->attach($profession);
        };

        return redirect()->route('workers.view-workers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $professions = Profession::all();
        $worker = Worker::findOrFail($id);

        return view('workers.edit-workers', compact('professions', 'worker'));
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {

        $worker = Worker::find($id);
        // Validate the incoming request data
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'professions' => 'nullable|array',
            'professions.*' => 'exists:professions,id'
        ]);

        // Update the worker's data
        $worker->first_name = $request->input('first_name');
        $worker->last_name = $request->input('last_name');
        $worker->bio = $request->input('bio');
        $worker->save();

        // Sync professions
        if ($request->has('professions')) {
            $worker->professions()->sync($request->input('professions'));
        } else {
            $worker->professions()->sync([]);
        }
        // Redirect back with success message
        return redirect()->route('workers.view-workers')->with('status', 'Worker updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $worker = Worker::find($id);

        if (!$worker) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Worker not found'], 404);
        }

        $worker->delete();
        return redirect()->route('workers.view-workers')->with('status', 'Workers deleted Successfully');
    }
}
