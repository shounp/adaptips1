<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies | Adapti</title>
</head>
<body>
<<<<<<< HEAD
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <img src="{{ $movie->image }}" alt="Imagem"/>
=======
    <a href="{{route('movie.create')}}"><button>Criar</button></a>
    @foreach ($movies as $movie)
        <h4>{{ $movie->title }}</h4>
        <img src="storage/{{ $movie->image }}" alt="Imagem"width="60"height="100"/>
        <a href="{{route('movie.edit',$movie->id)}}">Editar</a>
>>>>>>> 2f454e3 (Meu terceiro commit)
    @endforeach
</body>
</html>