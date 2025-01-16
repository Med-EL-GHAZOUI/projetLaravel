<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Problem;

class ProblemController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'description' => 'required',
        ]);

        Problem::create([
            'name' => $request->name,
            'email' => $request->email,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Votre problème a été soumis avec succès.');
    }
}
