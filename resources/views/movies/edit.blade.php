<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
</head>
<body>
<form method="POST" action="{{route('movies.update',$movie->id)}}">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Movies name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="movie_name"
    value="{{$movie->movie_name}}">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Movies description</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="movie_description"
    value="{{$movie->movie_description}}">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">movie gener</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="movie_gener"
    value="{{$movie->movie_gener}}">
  </div>

 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>








