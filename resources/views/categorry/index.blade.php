<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .create{
            margin:1em 0em;
            border:none;
            border-radius:2px;
            background:blue;
            padding:1em
        }

        .create a{
            text-decoration:none;
            color:black;
        }
        .delete{
            margin:1em 0em;
            border:none;
            border-radius:2px;
            background:red;
            padding:1em
        }
        .edit{
            margin:1em 0em;
            border:none;
            border-radius:2px;
            background:green;
            padding:1em
        }
        .edit a{
            text-decoration:none;
            color:black;
        }
    </style>
</head>
<body>
    <h1>Categorry</h1>
  <button class="create"><a href="{{route('categorry.create')}}">create</a></button>
</br>

<table border="1">
    <tr>
        <th>name_categorry</th>
  
        <th>delete</th>
        <th>edit</th>
    </tr>
    @foreach($Categorry as $categorrye)
    <tr>
        <th>{{$categorrye->name_categorry}}</th>
     
        <form method="POST" action="{{route('categorry.destroy',$categorrye->id)}}">
        @csrf
        @method('delete')
        <th><button type="submit" class="delete">delete</button></th>
        </form>
        <th><button class="edit"><a href="{{route('categorry.edit',$categorrye->id)}}">edit</a></button></th>
    </tr>
    @endforeach
</table>
    
</body>
</html>