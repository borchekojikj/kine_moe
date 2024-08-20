<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index()
    {

        $data = DB::table('site_settings')->get()->first();
        return view('page-settings', compact('data'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'slogan' => 'required|string|max:255',
            'promo' => 'nullable|string|max:255',
        ]);

        DB::table('site_settings')->update([
            'title' => $request->input('title'),
            'slogan' => $request->input('slogan'),
            'promo' => $request->input('promo'),
        ]);



        return redirect()->back()->with('status', 'Settings updated successfully.');
    }
}
