<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create mission</title>
</head>

<body>
    <form action="/store" method="post">
        @csrf
        <input type="text" name="title" placeholder="title" required><br>
        <input type="text" name="description" placeholder="description" required><br>
        <input type="date" name="date" placeholder="date" required><br>
        <select name="status" required>
            <option value="pending">Pending</option>
        </select><br>
        
        <button type="submit">save</button>

    </form>
</body>

</html>