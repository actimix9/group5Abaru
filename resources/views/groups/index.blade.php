@extends('layouts.template')

@section('title', 'Groups')
@section('page-title', 'Groups')
@section('page-subtitle', 'Manage student groups')

@section('content')
    @include('groups.table')
@endsection