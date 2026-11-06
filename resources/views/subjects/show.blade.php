@extends('layouts.template')

@section('title', 'Subject Details')
@section('page-title', 'Show Subject Details')
@section('page-subtitle', $subject->subject_name)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Subject Code:</strong>
                {{ $subject->subject_code }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Subject Name:</strong>
                {{ $subject->subject_name }}
            </div>
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('subjects.index') }}">Back</a>
        </div>
    </div>
@endsection