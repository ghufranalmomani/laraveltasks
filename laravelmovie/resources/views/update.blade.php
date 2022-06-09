<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{url('update/id/'.$view3->id)}}" method="post">
        @csrf 
    <label for="title"> Movie</label>
    <input type="text" name="Movie" value="{{$view3->Movie}}" >
    <label >Movie Name</label>
    <input type="text" name="MovieName" value="{{$view3->MovieName}}">
    <label >Movie Description</label>
    <input type="text" name="MovieDes" value="{{$view3->MovieDes}}">
    <label >Movie Gener</label>
    <input type="text" name="MovieGen" value="{{$view3->MovieGen}}">

    <button type="submit" class="btn btn-danger">add Item</button>
    </form>
</body>
</html>