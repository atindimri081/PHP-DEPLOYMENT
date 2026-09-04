<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpsLog - MVP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-8">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-4">OpsLog Incident Tracker</h1>
        <form action="/incidents" method="POST" class="mb-8 flex gap-4">
            @csrf
            <input type="text" name="title" placeholder="Event description..." class="border p-2 flex-1 rounded" required>
            <select name="severity" class="border p-2 rounded">
                <option value="Info">Info</option>
                <option value="Warning">Warning</option>
                <option value="Critical">Critical</option>
            </select>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Log Event</button>
        </form>
        <h2 class="text-xl font-semibold mb-2">Recent Events</h2>
        <ul class="divide-y">
            @foreach($incidents as $incident)
                <li class="py-3 flex justify-between items-center">
                    <span>{{ $incident->title }}</span>
                    <span class="text-sm px-2 py-1 rounded {{ $incident->severity == 'Critical' ? 'bg-red-200' : 'bg-gray-200' }}">
                        {{ $incident->severity }}
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>