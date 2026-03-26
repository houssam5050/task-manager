<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
</head>
<body>
    <form action="/update/{{$dboards->id}}" method="POST">
        @csrf
        
        <input type="text" name="title" value="{{$dboards->title}}" required><br>
        <input type="text" name="description" value="{{$dboards->description}}" required><br>
        <input type="date" name="date" value="{{$dboards->date}}" required> <br>
        <select name="status" required>
            <option value="pending">Pending</option>
            <option value="done">Done</option>
        </select><br>
        <button type="submit">update</button>
    </form>
</body>
</html>