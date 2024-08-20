<?php

namespace App\Http\Controllers;

use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cultures = Culture::all();
        return view('cultures.view-cultures', compact('cultures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cultures.create-cultures');
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
        $culture = Culture::create([
            'title' => $validatedData['title'],
        ]);

        // Redirect to a route named 'professions.view-professions' with a success message
        return redirect()->route('cultures.view-cultures')->with('status', 'Culture created successfully');
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
        $culture = Culture::find($id);
        return view('cultures.edit-cultures', compact('culture'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $culture = Culture::find($id);

        $culture->update(['title' => $request->title]);

        return redirect()->route('cultures.view-cultures')->with('status', 'Culture updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */



    public function destroy(string $id)
    {
        $culture = Culture::find($id);

        if (!$culture) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Culture not found'], 404);
        }

        $culture->delete();
        return redirect()->route('cultures.view-cultures')->with('status', 'Culture  deleted Successfully');
    }
}
