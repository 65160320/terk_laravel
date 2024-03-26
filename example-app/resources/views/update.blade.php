<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("CSS/update.css")}}">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Edit Friends</h1>
        <form action = "/friends/{{$f_data -> f_id}}" method = "POST">
        @csrf
        @method("PUT")
        <label for=> Name : </label>
        <input type="text" name = "name" value= {{$f_data -> f_name}}>
        <br>
        <br>
        <label for=> Age : </label>
        <input type="text" name = "age" value= {{$f_data -> f_age}}>
        <br>
        <br>
        <button class = "update-btn type" type = "submit" >submit</button>
    </div>
</body>
</html>