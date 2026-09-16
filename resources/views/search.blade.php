<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50">
    <form method="GET" action="{{ route('search') }}">
    <input type="text" name="query" value="{{ $query }}" placeholder="Search movies..." class="m-3">
    <button type="submit">Submit</button>
    </form>
    <div class="grid md:grid-cols-3 gap-6">
         @foreach ($results as $movie)
    <div class="bg-white border border-gray-200 rounded-xl p-4">
        @if ($movie['poster_path'])
            <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path']}}" alt="{{ $movie['title']}}" class="w-full rounded-lg mb-3">
        @else
            <img src="https://via.placeholder.com/500x750?text=No+Poster" alt="No poster available" class="w-full rounded-lg mb-3">
        @endif 
        <h3 class="font-semibold text-lg">{{ $movie['title']}}</h3>
        <p class="text-gray-600 text-sm line-clamp">{{ $movie['overview']}}</p>
    </div>
    @endforeach
    </div>
</body>
</html>