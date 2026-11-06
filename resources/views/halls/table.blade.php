<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">List of Halls</h2>
    <a class="btn btn-success" href="{{ route('halls.create') }}">Add New Hall</a>
</div>

@if ($message = session('success'))
    <div class="alert alert-success"><p class="mb-0">{{ $message }}</p></div>
@endif

<table class="table table-bordered bg-white">
    <tr>
        <th>No</th>
        <th>Hall Name</th>
        <th>Hall Place</th>
        <th width="280px">Action</th>
    </tr>
    @forelse ($halls as $h)
    <tr>
        <td>{{ $h->id }}</td>
        <td>{{ $h->lecture_hall_name }}</td>
        <td>{{ $h->lecture_hall_place }}</td>
        <td>
            <form action="{{ route('halls.destroy', $h->id) }}" method="POST"
                  onsubmit="return confirm('Delete this hall?')">
                <a class="btn btn-info" href="{{ route('halls.show', $h->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('halls.edit', $h->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr><td colspan="4" class="text-center">No halls found.</td></tr>
    @endforelse
</table>