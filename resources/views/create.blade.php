<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route("books.store")}}" method="POST">
        @csrf
        @method("POST")

        <div>
            <label for="title">Titolo</label>
            <input type="text" name="title" id="title" placeholder="Titolo">
        </div>

        <div>
            <label for="author">Autore</label>
            <input type="text" name="author" id="author" placeholder="Autore">
        </div>

        <div>
            <label for="edition">Editore</label>
            <input type="text" name="edition" id="edition" placeholder="Editore">
        </div>

        <div>
            <label for="genre">Genere</label>
            <input type="text" name="genre" id="genre" placeholder="Genere">
        </div>

        <div>
            <label for="image">URL immagine</label>
            <input type="text" name="image" id="image" placeholder="URL immagine">
        </div>

        <div>
            <label for="year">Anno</label>
            <input type="date" name="year" id="year" placeholder="Anno">
        </div>

        <div>
            <label for="isbn">Codice ISBN</label>
            <input type="text" name="isbn" id="isbn" placeholder=""Codice ISBN>
        </div>

        <div>
            <label for="pages">Numero di pagine</label>
            <input type="text" name="pages" id="pages" placeholder="Numero di pagine">
        </div>

        <input type="submit" value="Salva">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>