<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activities</title>
</head>

<body>
    <div class="container">
        <h1>Activity List</h1>

        <a href="/{{ route('activities.create') }}" class="btn btn-primary mb-3">Create New Activity</a>

        @if($activities->count())
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>User</th>
                    <th>Date</th>
                    <th>Paid</th>
                    <th>Notes</th>
                    <th>Satisfaction</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->id }}</td>
                    <td>{{ ucfirst($activity->type) }}</td>
                    <td>{{ $activity->user->name ?? 'N/A' }}</td>
                    <td>{{ \Carbon\Carbon::parse($activity->date)->format('m/d/Y') }}</td>
                    <td>{{ $activity->paid ? 'Yes' : 'No' }}</td>
                    <td>{{ $activity->notes }}</td>
                    <td>{{ $activity->satisfaction ?? 'Not rated' }}</td>
                    <td>
                        <a href="/{{ route('activities.show', $activity) }}" class="btn btn-sm btn-info">View</a>
                        <a href="/{{ route('activities.edit', $activity) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('activities.destroy', $activity) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this activity?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <p>No activities found.</p>
        @endif
    </div>

</body>

</html>