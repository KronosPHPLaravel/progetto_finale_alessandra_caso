<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class FilmController extends Controller
{
    public function index()
    {
        $films = Film::all();
        return view('index', compact('films'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'duration' => 'required|integer',
            'synopsis' => 'required',
        ]);

        Film::create($request->all());

        return redirect()->route('films.index');
    }

    public function edit(Film $film)
    {
        return view('edit', compact('film'));
    }

    public function update(Request $request, Film $film)
    {
        $request->validate([
            'title' => 'required|max:255',
            'duration' => 'required|integer',
            'synopsis' => 'required',
        ]);

        $film->update($request->all());

        return redirect()->route('films.index');
    }

    public function destroy(Film $film)
    {
        $film->delete();

        return redirect()->route('films.index');
    }

    public function show(Film $film)
    {
        return view('films.show', compact('film'));
    }
}
