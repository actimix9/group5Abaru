@extends('layouts.template')

@section('title', 'Hall Details')
@section('page-title', 'Show Hall Details')
@section('page-subtitle', $hall->lecture_hall_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Hall Name:</strong>
                {{ $hall->lecture_hall_name }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Hall Place:</strong>
                {{ $hall->lecture_hall_place }}
            </div>
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('halls.index') }}">Back</a>
        </div>
    </div>
@endsection