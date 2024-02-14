<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ha chiesto di diventare revisore</h1>
    <p>{{$user->email}}</p>
    <p>{{$user->name}}</p>
    <p>{{$messaggio}}</p>

    <a href="{{route('make.revisor', compact('user'))}}">Rendi revisore</a>
    
</body>
</html>