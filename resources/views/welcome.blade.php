<!DOCTYPE html>
<html>
<head>
    <title>Google Calendar Events</title>
</head>
<body>
    <h1>Google Calendar Events</h1>

    <ul>
        @foreach ($events as $event)
            <li>{{ $event->getSummary() }}</li>
        @endforeach
    </ul>
</body>
</html>
