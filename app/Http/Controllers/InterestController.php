<?php

namespace App\Http\Controllers;

use App\Models\Interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $interests = Interest::all();
        return view('interests.view-interests', compact('interests'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('interests.create-interests');
    }

    /**
     * Store a newly created resource in storage.
     */


    public function store(Request $request)
    {
        // Validate the request data if necessary
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
        ]);

        // Create a new Profession
        $interest = Interest::create([
            'title' => $validatedData['title'],
        ]);

        // Redirect to a route named 'professions.view-professions' with a success message
        return redirect()->route('interests.view-interests')->with('status', 'Interest created successfully');
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
        $interest = Interest::find($id);
        return view('interests.edit-interests', compact('interest'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $interest = Interest::find($id);

        $interest->update(['title' => $request->title]);

        return redirect()->route('interests.view-interests')->with('status', 'Interest updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */



    public function destroy(string $id)
    {
        $interest = Interest::find($id);

        if (!$interest) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Interest not found'], 404);
        }

        $interest->delete();
        return redirect()->route('interests.view-interests')->with('status', 'Interest  deleted Successfully');
    }
}
