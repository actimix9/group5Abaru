@extends('layouts.template')

@section('title', 'Edit Hall')
@section('page-title', 'Edit Hall')
@section('page-subtitle', 'Update hall details')

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

    <form action="{{ route('halls.update', $hall->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Hall Name:</strong>
                    <input type="text" name="lecture_hall_name" class="form-control"
                           placeholder="Hall Name"
                           value="{{ old('lecture_hall_name', $hall->lecture_hall_name) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Hall Place:</strong>
                    <input type="text" name="lecture_hall_place" class="form-control"
                           placeholder="Hall Place"
                           value="{{ old('lecture_hall_place', $hall->lecture_hall_place) }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('halls.index') }}">Back</a>
            </div>
        </div>
    </form>
@endsection