<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task manager</title>
</head>

<body>
    <x-navbar></x-navbar>
    <h2>Welcome</h2>

    @if(session('user'))
    <p>Hello, {{ session('user')->name }}</p>
    @endif

</body>

</html>