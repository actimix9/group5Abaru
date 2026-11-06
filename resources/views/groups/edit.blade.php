@extends('layouts.template')

@section('title', 'Edit Group')
@section('page-title', 'Edit Group')
@section('page-subtitle', 'Update group details')

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

    <form action="{{ route('groups.update', $group->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control"
                           placeholder="Group Name"
                           value="{{ old('name', $group->name) }}">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Part:</strong>
                    <input type="text" name="part" class="form-control"
                           placeholder="Part"
                           value="{{ old('part', $group->part) }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('groups.index') }}">Back</a>
            </div>
        </div>
    </form>
@endsection