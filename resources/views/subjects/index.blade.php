@extends('layouts.template')

@section('title', 'Subjects')
@section('page-title', 'Subjects')
@section('page-subtitle', 'Explore subject information')

@section('content')
    @include('subjects.table')
@endsection