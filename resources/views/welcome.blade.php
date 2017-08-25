<!doctype html>

<html>

<head>

    <title></title>

</head>

<body>

    <nav><a href="/">Home</a> <a href="/about">About</a></nav>

    <h1>
        @php ($name)
            <p>You're on the {{ $name }}</p>
    </h1>

    <ul>
        @foreach ($tasks as $task)
        <li>{{ $task }}</li>
        @endforeach
    </ul>

</body>

</html>
