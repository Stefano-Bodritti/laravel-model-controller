<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Movies</title>
  </head>
  <body>
    <a href="{{route("movies.index")}}">Torna indietro</a>
    <h2>{{$movie->title}}</h2>
    <p>Regia: {{$movie->director}}</p>
    <p>Durata: {{$movie->duration}} minuti</p>
    <p>Generi: {{$movie->genre}}</p>
  </body>
</html>