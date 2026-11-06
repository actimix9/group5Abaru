<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">List of Students</h2>
    <a class="btn btn-success" href="{{ route('students.create') }}">Add New Student</a>
</div>

@if ($message = session('success'))
    <div class="alert alert-success"><p class="mb-0">{{ $message }}</p></div>
@endif

<table class="table table-bordered bg-white">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>Address</th>
        <th>Joined On</th>
        <th width="280px">Action</th>
    </tr>
    @forelse ($students as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->email }}</td>
        <td>{{ $s->age }}</td>
        <td>{{ $s->address }}</td>
        <td>{{ $s->created_at }}</td>
        <td>
            <form action="{{ route('students.destroy', $s->id) }}" method="POST"
                  onsubmit="return confirm('Delete this student?')">
                <a class="btn btn-info" href="{{ route('students.show', $s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('students.edit', $s->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr><td colspan="7" class="text-center">No students found.</td></tr>
    @endforelse
</table>