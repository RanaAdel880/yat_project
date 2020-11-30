<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        @foreach ($products as $item)
        <div class="col-sm-3">
            <div class="card">
              <img class="card-img-top" src="{{ $item->image }}" alt="Card image cap">
              <div class="card-body">
              <h5 class="card-title">{{ $item->name }}</h5>
              <p class="card-text">{{ $item->description }}</p>
                <a href="#" class="btn btn-primary">Edit</a>
                <a href="#" class="btn btn-primary">Delete</a>
              </div>
            </div>
        </div>
        @endforeach
    </div>
</body>
</html>
