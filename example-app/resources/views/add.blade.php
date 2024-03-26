<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("CSS/add.css")}}">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Add Friends</h1>
        <form action = "/friends" method = "POST">
        @csrf
        <label for=> Name : </label>
        <input type="text" name = "name" required >
        <br>
        <br>
        <label for=> Age : </label>
        <input type="text" name = "age" required >
        <br>
        <br>
        <button class = "submit-btn type" type = "submit" >submit</button>
    </div>
</body>
</html>