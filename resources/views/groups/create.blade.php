@extends('layouts.template')

@section('title', 'Add Group')
@section('page-title', 'Add Group')
@section('page-subtitle', 'Create a new group')

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

    <form action="{{ route('groups.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control"
                           placeholder="Group Name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Part:</strong>
                    <input type="text" name="part" class="form-control"
                           placeholder="Part" value="{{ old('part') }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('groups.index') }}">Back</a>
            </div>
        </div>
    </form>
@endsection