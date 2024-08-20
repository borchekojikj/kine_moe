<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.view-categories', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('categories.create-categories');
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
        $category = Category::create([
            'title' => $validatedData['title'],
        ]);

        // Redirect to a route named 'professions.view-professions' with a success message
        return redirect()->route('categories.view-categories')->with('status', 'Categoriey created successfully');
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
        $category = Category::find($id);
        return view('categories.edit-categories', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category = Category::find($id);

        $category->update(['title' => $request->title]);

        return redirect()->route('categories.view-categories')->with('status', 'Category updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */



    public function destroy(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            // Handle case where content with given ID was not found
            return response()->json(['message' => 'Category not found'], 404);
        }

        $category->delete();
        return redirect()->route('categories.view-categories')->with('status', 'Category  deleted Successfully');
    }
}
