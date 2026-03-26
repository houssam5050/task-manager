<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task manager</title>
</head>


<table border="1">
    <tr>
        <th>title</th>
        <th>description</th>
        <th>date</th>
        <th>status</th>
        <th>action</th>
    </tr>
    
    @foreach($dboard as $d)
    <tr>
        <td>{{$d->title}}</td>
        <td>{{$d->description}}</td>
        <td>{{$d->date}}</td>
        <td>{{$d->status}}</td>
        <td>
            <a href="/edit/ {{$d->id}}">edit</a>
        </td>
        <td>
            <a href="/delete/{{$d->id}}">delete</a>
        </td>
    </tr>
    @endforeach
</table>
<br>
<a href="/create">add mission</a>

<body>
</body>

</html>