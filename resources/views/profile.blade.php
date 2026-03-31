<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
   

    @foreach($db as $d)
    <p>{{$d->name}}</p>
    <p>{{$d->email}}</p>
@endforeach

{{ session('user')->name }}
</body>

</html>