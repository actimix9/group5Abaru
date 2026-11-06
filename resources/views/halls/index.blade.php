@extends('layouts.template')

@section('title', 'Halls')
@section('page-title', 'Halls')
@section('page-subtitle', 'View hall information')

@section('content')
    @include('halls.table')
@endsection