<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">List of Timetables</h2>
    <a class="btn btn-success" href="{{ route('timetables.create') }}">Add New Timetable</a>
</div>

@if ($message = session('success'))
    <div class="alert alert-success"><p class="mb-0">{{ $message }}</p></div>
@endif

<table class="table table-bordered bg-white">
    <tr>
        <th>No</th>
        <th>Student</th>
        <th>Subject</th>
        <th>Day</th>
        <th>Time</th>
        <th>Hall</th>
        <th>Group</th>
        <th width="280px">Action</th>
    </tr>
    @forelse ($timetables as $t)
    <tr>
        <td>{{ $t->id }}</td>
        <td>{{ $t->user?->name }}</td>
        <td>{{ $t->subject?->subject_name }}</td>
        <td>{{ $t->day?->day_name }}</td>
        <td>{{ $t->time_from }} - {{ $t->time_to }}</td>
        <td>{{ $t->hall?->lecture_hall_name }}</td>
        <td>{{ $t->group?->name }}</td>
        <td>
            <form action="{{ route('timetables.destroy', $t->id) }}" method="POST"
                  onsubmit="return confirm('Delete this timetable?')">
                <a class="btn btn-info" href="{{ route('timetables.show', $t->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('timetables.edit', $t->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr><td colspan="8" class="text-center">No timetables found.</td></tr>
    @endforelse
</table>