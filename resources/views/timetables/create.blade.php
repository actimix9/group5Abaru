@extends('layouts.template')

@section('title', 'Add Timetable')
@section('page-title', 'Add Timetable')
@section('page-subtitle', 'Create a new class schedule')

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

    <form action="{{ route('timetables.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <strong>Student:</strong>
                    <select name="user_id" class="form-control">
                        <option value="">-- Select Student --</option>
                        @foreach ($users as $u)
                            <option value="{{ $u->id }}" {{ old('user_id') == $u->id ? 'selected' : '' }}>
                                {{ $u->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Subject:</strong>
                    <select name="subject_id" class="form-control">
                        <option value="">-- Select Subject --</option>
                        @foreach ($subjects as $s)
                            <option value="{{ $s->id }}" {{ old('subject_id') == $s->id ? 'selected' : '' }}>
                                {{ $s->subject_code }} - {{ $s->subject_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Day:</strong>
                    <select name="day_id" class="form-control">
                        <option value="">-- Select Day --</option>
                        @foreach ($days as $d)
                            <option value="{{ $d->id }}" {{ old('day_id') == $d->id ? 'selected' : '' }}>
                                {{ $d->day_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Hall:</strong>
                    <select name="hall_id" class="form-control">
                        <option value="">-- Select Hall --</option>
                        @foreach ($halls as $h)
                            <option value="{{ $h->id }}" {{ old('hall_id') == $h->id ? 'selected' : '' }}>
                                {{ $h->lecture_hall_name }} ({{ $h->lecture_hall_place }})
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <strong>Group:</strong>
                    <select name="lecturer_group_id" class="form-control">
                        <option value="">-- Select Group --</option>
                        @foreach ($groups as $g)
                            <option value="{{ $g->id }}" {{ old('lecturer_group_id') == $g->id ? 'selected' : '' }}>
                                {{ $g->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Time From:</strong>
                    <input type="time" name="time_from" class="form-control"
                           value="{{ old('time_from') }}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <strong>Time To:</strong>
                    <input type="time" name="time_to" class="form-control"
                           value="{{ old('time_to') }}">
                </div>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a class="btn btn-secondary" href="{{ route('timetables.index') }}">Back</a>
            </div>
        </div>
    </form>
@endsection