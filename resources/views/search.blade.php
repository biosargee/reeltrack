<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    <form method="GET" action="{{ route('search') }}">
    <input type="text" name="query" value="{{ $query }}" placeholder="Search movies...">
    <button type="submit">Submit</button>
    </form>

    @foreach ($results as $movie)
    <div>
        <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path']}}">
        <h3>{{ $movie['title']}}</h3>
        <p>{{ $movie['overview']}}</p>
    </div>
    @endforeach
</body>
</html>