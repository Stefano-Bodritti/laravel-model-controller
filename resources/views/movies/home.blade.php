<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Home Movies</title>
  </head>
  <body>
    <h1>Lista movies</h1>
    <div class="text-right add">
      <a href="{{route("movies.create")}}"><button type="button" class="btn btn-primary">Aggiungi film</button></a>
    </div>
    <div class="container container_home">
      @foreach ($movies as $movie)
      <div class="box_movie">
        <h3>{{$movie->title}}</h3>
        <div class="link"><a href="{{route("movies.show", ["movie" => $movie->id])}}">Dettagli film</a></div>
      </div>
      @endforeach
    </div>
  </body>
</html>