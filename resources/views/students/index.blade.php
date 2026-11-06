@extends('layouts.template')

@section('title', 'Students')
@section('page-title', 'Students')
@section('page-subtitle', 'Manage student records')

@section('content')
    @include('students.table')
@endsection