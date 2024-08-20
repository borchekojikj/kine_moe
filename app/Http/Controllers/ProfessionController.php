<?php

namespace App\Http\Controllers;

use App\Models\Profession;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professions = Profession::all();
        return view('professions.view-professions', compact('professions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professions.create-professions');
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
        $profession = Profession::create([
            'title' => $validatedData['title'],
        ]);

        // Redirect to a route named 'professions.view-professions' with a success message
        return redirect()->route('professions.view-professions')->with('status', 'Profession created successfully');
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
        $profession = Profession::find($id);
        return view('professions.edit-professions', compact('profession'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profession = Profession::find($id);

        $profession->update(['title' => $request->title]);

        return redirect()->route('professions.view-professions')->with('status', 'Profession  updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */



    public function destroy(string $id)
    {
        $profession = Profession::find($id);

        if (!$profession) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Profession not found'], 404);
        }

        $profession->delete();
        return redirect()->route('professions.view-professions')->with('status', 'Profession  deleted Successfully');
    }
}
