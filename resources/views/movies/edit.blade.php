<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Modifica film</title>
  </head>
  <body>
    <h1>Modifica film: {{$movie->title}}</h1>
    <div class="container">
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <form action="{{route('movies.update', $movie)}}" method="POST">
        @method('UPDATE')
        @csrf

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{$movie->title}}">
        </div>
        <div class="form-group">
          <label for="director">Regista</label>
          <input type="text" class="form-control" id="director" name="director" placeholder="Inserisci il regista" value="{{$movie->director}}">
        </div>
        <div class="form-group">
          <label for="genre">Genere</label>
          <input type="text" class="form-control" id="genre" name="genre" placeholder="Inserisci i generi" value="{{$movie->genre}}">
        </div>
        <div class="form-group">
          <label for="duration">Durata (minuti)</label>
          <select class="form-control" id="duration" name="duration" placeholder="Inserisci la durata">
            @for ($i = 1; $i < 300; $i++)
              <option value="{{$i}}" {{$i == $movie->duration ? 'selected' : ''}}>{{$i}}</option>
            @endfor
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
    </div>
  </body>
</html>