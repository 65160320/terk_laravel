<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("CSS/read.css")}}">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Check Friends</h1>
        @csrf
        <label for=> Name : {{$f_data -> f_name}}</label>
        <br>
        <br>
        <label for=> Age : {{$f_data -> f_age}}</label>
        <br>
        <br>
        <a href="/friends"><button class = "back-btn" type = "botton" >Back</button></a>
    </div>
</body>
</html>