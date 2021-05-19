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
        <div class="inner_box">
          <h3>{{$movie->title}}</h3>
          <div class="link">
            <a href="{{route("movies.show", ["movie" => $movie->id])}}"><button type="button" class="btn btn-success">Dettagli film</button></a>
            <form action="{{route('movies.destroy', ["movie" => $movie->id])}}" method="POST">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
            <a href="{{route("movies.edit", ["movie" => $movie->id])}}"><button type="button" class="btn btn-primary">Modifica</button></a>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    @if (session('success'))
    <div class="alert alert-success">
      {{ session('success') }}
    </div>
    @endif
  </body>
</html>