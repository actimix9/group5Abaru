<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StudentController extends Controller
{
    public function index()
    {
        $students = User::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'age'      => 'nullable|integer|min:1|max:120',
            'address'  => 'nullable|string|max:500',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'age'      => $request->age,
            'address'  => $request->address,
        ]);

        return redirect()->route('students.index')->with('success', 'Student added.');
    }

    public function show(User $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(User $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, User $student)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email,' . $student->id,
            'password' => 'nullable|string|min:8',
            'age'      => 'nullable|integer|min:1|max:120',
            'address'  => 'nullable|string|max:500',
        ]);

        $student->name    = $request->name;
        $student->email   = $request->email;
        $student->age     = $request->age;
        $student->address = $request->address;
        if ($request->filled('password')) {
            $student->password = Hash::make($request->password);
        }
        $student->save();

        return redirect()->route('students.index')->with('success', 'Student updated.');
    }

    public function destroy(User $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted.');
    }
}