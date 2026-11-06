<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">List of Groups</h2>
    <a class="btn btn-success" href="{{ route('groups.create') }}">Add New Group</a>
</div>

@if ($message = session('success'))
    <div class="alert alert-success"><p class="mb-0">{{ $message }}</p></div>
@endif

<table class="table table-bordered bg-white">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Part</th>
        <th width="280px">Action</th>
    </tr>
    @forelse ($groups as $g)
    <tr>
        <td>{{ $g->id }}</td>
        <td>{{ $g->name }}</td>
        <td>{{ $g->part }}</td>
        <td>
            <form action="{{ route('groups.destroy', $g->id) }}" method="POST"
                  onsubmit="return confirm('Delete this group?')">
                <a class="btn btn-info" href="{{ route('groups.show', $g->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('groups.edit', $g->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @empty
    <tr><td colspan="4" class="text-center">No groups found.</td></tr>
    @endforelse
</table>