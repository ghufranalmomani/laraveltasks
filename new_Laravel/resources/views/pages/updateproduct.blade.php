@extends('pages.app')

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
@endsection