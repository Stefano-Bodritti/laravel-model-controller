<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Aggiungi film</title>
  </head>
  <body>
    <h1>Aggiungi un nuovo film</h1>
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

      <form action="{{route('movies.store')}}" method="POST">
        @method('POST')
        @csrf

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo" value="{{ old("title") }}">
        </div>
        <div class="form-group">
          <label for="director">Regista</label>
          <input type="text" class="form-control" id="director" name="director" placeholder="Inserisci il regista" value="{{ old("director") }}">
        </div>
        <div class="form-group">
          <label for="genre">Genere</label>
          <input type="text" class="form-control" id="genre" name="genre" placeholder="Inserisci i generi" value="{{ old("genre") }}">
        </div>
        <div class="form-group">
          <label for="plot">Trama</label>
          <textarea type="text" class="form-control" id="plot" name="plot" placeholder="Inserisci la trama" value="{{ old("plot") }}"></textarea>
        </div>
        <div class="form-group">
          <label for="duration">Durata (minuti)</label>
          <select class="form-control" id="duration" name="duration" placeholder="Inserisci la durata">
            @for ($i = 1; $i < 300; $i++)
              <option value="{{$i}}" {{ $i == old('duration') ? 'selected' : '' }}>{{$i}}</option>
            @endfor
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
      </form>
    </div>
  </body>
</html>