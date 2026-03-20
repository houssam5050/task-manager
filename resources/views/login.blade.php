
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <x-navbar></x-navbar>
    @if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
@endif
<h1>Login</h1>
<form action="/login" method="post">
    @csrf
    <input type="email" name="email" placeholder="email" required><br>
    <input type="password" name="password" placeholder="password" required><br>
    <button type="submit">Login</button>
    <br>
   
</form>
</body>
</html>