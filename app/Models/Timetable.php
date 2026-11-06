<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Timetable extends Model
{
    protected $table = 'student_timetables';

    protected $fillable = [
        'user_id', 'subject_id', 'day_id', 'hall_id',
        'lecturer_group_id', 'time_from', 'time_to',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    public function day()
    {
        return $this->belongsTo(Day::class);
    }

    public function hall()
    {
        return $this->belongsTo(Hall::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'lecturer_group_id');
    }
}