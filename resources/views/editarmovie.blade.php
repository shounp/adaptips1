<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Filme | Adapti PS</title>
</head>
<body>
    <form id="form-create" action="{{ route('movie.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <input value="{{$movie->title}}" type="text" name="title" placeholder="Título"required >
        <input value="{{$movie->genre}}"type="text" name="genre" placeholder="Genero"required>
        <select value="{{$movie->country_id}}"name="country_id" id="country_id">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input value="{{$movie->release}}"type="text" name="release" placeholder="Data de lançamento"required>
        <input value="{{$movie->rating}}"type="text" name="rating" placeholder="nota"required>
        <textarea name="synopsis" id="synopsis" cols="30" rows="10">{{$movie->synopsis}}</textarea>
        <input value="storage/{{ $movie->image }}"type="file" name="image" accept="image/*">
        <button type="submit">Salvar</button>
        <a href="{{ route('movie.index') }}">Voltar</a>
    </form>
</body>
</html>