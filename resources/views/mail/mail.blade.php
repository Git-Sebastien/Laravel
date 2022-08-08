<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="robots" content="nofollow">
    <meta name="googlebot" content="noindex">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="invoice">   
        <h1> {{ $content['title'] }} </h1>
        <h3> {{ $content['subtitle'] }} </h3>
        <p>{{ $content['body'] }}</p>
        <img src="{{ $message->embed(asset('images/'.$content['img'])) }}" width="150" height="150">  
        <p> Merci !</p>
    </div>
</body>
</html>