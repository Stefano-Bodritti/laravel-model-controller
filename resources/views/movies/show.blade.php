<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>{{$movie->title}} - Dettagli film</title>
  </head>
  <body>
    <div class="back"><a href="{{route("movies.index")}}">Torna alla home</a></div>
    <div class="details">
      <h1>{{$movie->title}}</h1>
      <p>Regia: {{$movie->director}}</p>
      <p>Durata: {{$movie->duration}} minuti</p>
      <p>Generi: {{$movie->genre}}</p>
      <p>Trama: {{$movie->plot}}</p>
    </div>
    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
  </body>
</html>