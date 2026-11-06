@extends('layouts.template')

@section('title', 'Timetable Details')
@section('page-title', 'Show Timetable Details')
@section('page-subtitle', $timetable->subject?->subject_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Student:</strong>
                {{ $timetable->user?->name }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Subject:</strong>
                {{ $timetable->subject?->subject_code }} - {{ $timetable->subject?->subject_name }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Day:</strong>
                {{ $timetable->day?->day_name }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Time:</strong>
                {{ $timetable->time_from }} - {{ $timetable->time_to }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Hall:</strong>
                {{ $timetable->hall?->lecture_hall_name }} ({{ $timetable->hall?->lecture_hall_place }})
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Group:</strong>
                {{ $timetable->group?->name }}
            </div>
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('timetables.index') }}">Back</a>
        </div>
    </div>
@endsection