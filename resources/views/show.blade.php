<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="{{$book->image}}"></li>
        <li>{{$book->isbn}}</li>
        <li>{{$book->title}}</li>
        <li>{{$book->author}}</li>
        <li>{{$book->year}}</li>
        <li>{{$book->genre}}</li>
        <li>{{$book->edition}}</li>
        <li>{{$book->pages}}</li>
    </ul>
    
    <form action="{{route("books.destroy", $book->id)}}" method="POST">
        @method("DELETE")
        @csrf
        <input type="submit" value="Cancella">
    </form>
</body>
</html>