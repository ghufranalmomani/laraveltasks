<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('add')}}" method="post">
        @csrf 
    <label for="title">Movie</label>
    <input type="text" name="Movie" >
    <label >Movie Name</label>
    <input type="text" name="MovieName">
    <label >Movie Description</label>
    <input type="text" name="MovieDes">
    <label >Movie Gener</label>
    <input type="text" name="MovieGen">
    <button type="submit">add Item</button>
    </form>
</body>
</html>