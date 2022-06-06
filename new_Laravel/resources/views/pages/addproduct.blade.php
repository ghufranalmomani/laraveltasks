@extends('pages.app');

@section('title')
Add Product   
@endsection

@section('content')
    <div class="container row">
        <form action="{{url('add-product')}}" method="post" class="form-group col-6 offset-4 mt-5">
            @csrf
            <label for="name">Product Name</label>
            <input type="text" id="name" class="form-control" name="name">
            <label for="description">Product description</label>
            <input type="text" id="description" class="form-control" name="description">
            <label for="picture">Product picture</label>
            <input type="text" id="picture" class="form-control" name="picture">
            <button type="submit" class="btn btn-success form-control">ADD</button>
        </form>
    </div>
@endsection