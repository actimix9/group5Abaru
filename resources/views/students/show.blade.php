@extends('layouts.template')

@section('title', 'Student Details')
@section('page-title', 'Show Student Details')
@section('page-subtitle', $student->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $student->name }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $student->email }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Age:</strong>
                {{ $student->age }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Address:</strong>
                {{ $student->address }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Joined On:</strong>
                {{ $student->created_at }}
            </div>
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Back</a>
        </div>
    </div>
@endsection