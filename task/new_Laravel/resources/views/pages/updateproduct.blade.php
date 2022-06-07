<!-- @extends('pages.app')

@section('title')
  Update product  
@endsection

@section('content')
    <div class="container row">
        <form action="{{url('update-product/id/'.$edit->id)}}" method="post" class="form-group col-6 offset-4 mt-5">
            @csrf
            @method('PUT')
            <label for="name">Product Name</label>
            <input type="text" id="name" class="form-control" name="name" value="{{$edit->name}}">
            <label for="description">Product description</label>
            <input type="text" id="description" class="form-control" name="description" value="{{$edit->description}}">
            <label for="picture">Product picture</label>
            <input type="text" id="picture" class="form-control" name="picture" value="{{$edit->picture}}">
            <button type="submit" class="btn btn-warning form-control">Update</button>
        </form>
    </div>
@endsection -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <form action="{{url('/update-data/id/'.$update->id)}}" method="post">
    @csrf
    @method('PUT')
    <!--Update title-->
    <label for="title">Name</label>
    <input type="text" name="Name" id="title" value="{{$update->CandyName}}">
    <label for="quantity">Quantity</label>
    <input type="text" name="CandyPrice" id="quantity" value="{{$update->CandyPrice}}">
    <!--Update body-->
    <label for="body">Price</label>
    <input type="text" name="CandyQuantity" id="body" value="{{$update->CandyQuantity}}">
    <!--update Button-->
    <button type="submit">Update</button>
    </form>
</body>
</html>