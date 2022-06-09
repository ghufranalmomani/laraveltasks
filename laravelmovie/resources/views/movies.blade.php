<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
  
<a href="{{url('add')}}" class="card-link btn btn-danger w-25">add</a>
    <div class="container">
      <div class="row d-flex justify-content-around">
        @foreach ($view2 as $data)

    <div class="card" style="width: 18rem;">
      <iframe src="{{$data->Movie}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        
        <div class="card-body">
          <h5 class="card-title">{{$data->MovieName}}</h5>
          <p class="card-text">{{$data->MovieDes}}</p>
          <p class="card-text">{{$data->MovieGen}}</p>
        </div>
       
        <div class="card-body">
          <a href="{{url('update/id/'.$data->id)}}" class="card-link">update</a>
          <a href="{{url('delete/id/'.$data->id)}}" class="card-link">delet</a>
        </div>
      </div>
      @endforeach
    </div>
  
    </div>
</body>
</html>