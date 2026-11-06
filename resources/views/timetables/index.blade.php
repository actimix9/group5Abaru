@extends('layouts.template')

@section('title', 'Timetables')
@section('page-title', 'Timetables')
@section('page-subtitle', 'View class schedules')

@section('content')
    @include('timetables.table')
@endsection