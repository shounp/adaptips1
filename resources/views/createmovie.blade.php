<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar Filme | Adapti PS</title>
</head>
<body>
    <form id="form-create" action="{{ route('movie.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="title" placeholder="Título"required>
        <input type="text" name="genre" placeholder="Genero"required>
        <select name="country_id" id="country_id">
            @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
        </select>
        <input type="text" name="release" placeholder="Data de lançamento"required>
        <input type="text" name="rating" placeholder="nota"required>
        <textarea name="synopsis" id="synopsis" cols="30" rows="10"></textarea>
        <input type="file" name="image" accept="image/*" required>
        <button type="submit">Salvar</button>
        <a href="{{ route('movie.index') }}">Voltar</a>
    </form>
</body>
</html>