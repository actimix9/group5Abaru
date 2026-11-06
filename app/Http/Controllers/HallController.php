<?php

namespace App\Http\Controllers;

use App\Models\Hall;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function index()
    {
        $halls = Hall::all();
        return view('halls.index', compact('halls'));
    }

    public function create()
    {
        return view('halls.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'lecture_hall_name'  => 'required|string|max:255',
            'lecture_hall_place' => 'required|string|max:255',
        ]);

        Hall::create($request->only('lecture_hall_name', 'lecture_hall_place'));

        return redirect()->route('halls.index')->with('success', 'Hall added.');
    }

    public function show(Hall $hall)
    {
        return view('halls.show', compact('hall'));
    }

    public function edit(Hall $hall)
    {
        return view('halls.edit', compact('hall'));
    }

    public function update(Request $request, Hall $hall)
    {
        $request->validate([
            'lecture_hall_name'  => 'required|string|max:255',
            'lecture_hall_place' => 'required|string|max:255',
        ]);

        $hall->update($request->only('lecture_hall_name', 'lecture_hall_place'));

        return redirect()->route('halls.index')->with('success', 'Hall updated.');
    }

    public function destroy(Hall $hall)
    {
        $hall->delete();

        return redirect()->route('halls.index')->with('success', 'Hall deleted.');
    }
}