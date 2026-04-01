<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
<x-sidebar></x-sidebar>

{{ session('user')->email }}<br>
{{ session('user')->name }}<br>
{{$total}}
</body>

</html>