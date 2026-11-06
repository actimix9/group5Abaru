<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'lecturer_groups';

    public $timestamps = false;

    protected $fillable = ['name', 'part'];
}