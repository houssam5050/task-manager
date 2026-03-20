<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
</head>
<body>
    <x-navbar></x-navbar>
    <h1>create acount</h1>
    <form action="/register" method="post">
        @csrf
        <input type="text" name="name" placeholder="username" required><br>
        <input type="email" name="email" placeholder="email" required><br>
        <input type="password" name="password" placeholder="password" required><br>
        <button type="submit">save</button><br>
    </form>
</body>
</html>