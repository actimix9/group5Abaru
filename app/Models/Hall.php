<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hall extends Model
{
    public $timestamps = false;

    protected $fillable = ['lecture_hall_name', 'lecture_hall_place'];
}