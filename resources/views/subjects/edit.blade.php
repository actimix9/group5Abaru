@extends('layouts.template')

@section('title', 'Edit Subject')
@section('page-title', 'Edit Subject')
@section('page-subtitle', 'Update subject details')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('subjects.update', $subject->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Subject Code:</strong>
                    <input type="text" name="subject_code" class="form-control"
                           placeholder="Subject Code"
                           value="{{ old('subject_code', $subject->subject_code) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Subject Name:</strong>
                    <input type="text" name="subject_name" class="form-control"
                           placeholder="Subject Name"
                           value="{{ old('subject_name', $subject->subject_name) }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('subjects.index') }}">Back</a>
            </div>
        </div>
    </form>
@endsection