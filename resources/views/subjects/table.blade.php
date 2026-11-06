<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">List of Subjects</h2>
    <a class="btn btn-success" href="{{ route('subjects.create') }}">Add New Subject</a>
</div>

@if ($message = session('success'))
    <div class="alert alert-success"><p class="mb-0">{{ $message }}</p></div>
@endif

<table class="table table-bordered bg-white">
    <tr>
        <th>No</th>
        <th>Subject Code</th>
        <th>Subject Name</th>
        <th width="280px">Action</th>
    </tr>
    @forelse ($subjects as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->subject_code }}</td>
        <td>{{ $s->subject_name }}</td>
        <td>
            <form action="{{ route('subjects.destroy', $s->id) }}" method="POST"
                  onsubmit="return confirm('Delete this subject?')">
                <a class="btn btn-info" href="{{ route('subjects.show', $s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('subjects.edit', $s->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr><td colspan="4" class="text-center">No subjects found.</td></tr>
    @endforelse
</table>