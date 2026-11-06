<?php

namespace App\Http\Controllers;

use App\Models\Day;
use App\Models\Group;
use App\Models\Hall;
use App\Models\Subject;
use App\Models\Timetable;
use App\Models\User;
use Illuminate\Http\Request;

class TimetableController extends Controller
{
    private array $relations = ['user', 'subject', 'day', 'hall', 'group'];

    private function rules(): array
    {
        return [
            'user_id'           => 'required|exists:users,id',
            'subject_id'        => 'required|exists:subjects,id',
            'day_id'            => 'required|exists:days,id',
            'hall_id'           => 'required|exists:halls,id',
            'lecturer_group_id' => 'required|exists:lecturer_groups,id',
            'time_from'         => 'required|date_format:H:i',
            'time_to'           => 'required|date_format:H:i|after:time_from',
        ];
    }

    private function dropdowns(): array
    {
        return [
            'users'    => User::all(),
            'subjects' => Subject::all(),
            'days'     => Day::all(),
            'halls'    => Hall::all(),
            'groups'   => Group::all(),
        ];
    }

    public function index()
    {
        $timetables = Timetable::with($this->relations)->get();
        return view('timetables.index', compact('timetables'));
    }

    public function create()
    {
        return view('timetables.create', $this->dropdowns());
    }

    public function store(Request $request)
    {
        Timetable::create($request->validate($this->rules()));

        return redirect()->route('timetables.index')->with('success', 'Timetable added.');
    }

    public function show(Timetable $timetable)
    {
        $timetable->load($this->relations);
        return view('timetables.show', compact('timetable'));
    }

    public function edit(Timetable $timetable)
    {
        return view('timetables.edit', ['timetable' => $timetable] + $this->dropdowns());
    }

    public function update(Request $request, Timetable $timetable)
    {
        $timetable->update($request->validate($this->rules()));

        return redirect()->route('timetables.index')->with('success', 'Timetable updated.');
    }

    public function destroy(Timetable $timetable)
    {
        $timetable->delete();

        return redirect()->route('timetables.index')->with('success', 'Timetable deleted.');
    }
}