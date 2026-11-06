@extends('layouts.template')

@section('title', 'Group Details')
@section('page-title', 'Show Group Details')
@section('page-subtitle', $group->name)

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $group->name }}
            </div>
        </div>
        <div class="col-12">
            <div class="form-group">
                <strong>Part:</strong>
                {{ $group->part }}
            </div>
        </div>
        <div class="col-12">
            <a class="btn btn-primary" href="{{ route('groups.index') }}">Back</a>
        </div>
    </div>
@endsection