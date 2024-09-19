<!DOCTYPE html>
<html>
<head>
    <title>User Activity Log</title>
</head>
<body>
    <h1>User Activity Log</h1>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>User ID</th>
                <th>Username</th> <!-- Added Username column -->
                <th>Action</th>
                <th>URL</th>
                <th>IP Address</th>
                <th>Created At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->id }}</td>
                    <td>{{ $activity->user_id }}</td>
                    <td>{{ $activity->username }}</td> <!-- Display Username -->
                    <td>{{ $activity->action }}</td>
                    <td>{{ $activity->url }}</td>
                    <td>{{ $activity->ip_address }}</td>
                    <td>{{ $activity->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $activities->links() }}
</body>
</html>
