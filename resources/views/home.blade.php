<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Movies</title>
  </head>
  <body>
    <h1>Lista movies</h1>
    @foreach ($movies as $movie)
    <ul>
      <li><h2>{{$movie->title}}</h2></li>
      <li>Regia: {{$movie->director}}</li>
      <li>Durata: {{$movie->duration}}</li>
      <li>Generi: {{$movie->genre}}</li>
    </ul>
    @endforeach
  </body>
</html>