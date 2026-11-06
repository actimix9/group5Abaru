@extends('layouts.template')

@section('title', 'Edit Student')
@section('page-title', 'Edit Student')
@section('page-subtitle', 'Update student details')

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

    <form action="{{ route('students.update', $student->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control"
                           placeholder="Name" value="{{ old('name', $student->name) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <input type="email" name="email" class="form-control"
                           placeholder="Email" value="{{ old('email', $student->email) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Password:</strong>
                    <input type="password" name="password" class="form-control"
                           placeholder="Leave blank to keep current password">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Age:</strong>
                    <input type="number" name="age" class="form-control"
                           placeholder="Age" value="{{ old('age', $student->age) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Address:</strong>
                    <textarea name="address" class="form-control" rows="3"
                              placeholder="Address">{{ old('address', $student->address) }}</textarea>
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('students.index') }}">Back</a>
            </div>
        </div>
    </form>
@endsection