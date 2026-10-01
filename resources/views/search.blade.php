
    @extends('layouts.app') {{--uses layouts.app as its skeleton - master template--}}

    @section('title', 'Search - ReelTrack')

    @section('content') {{--the content that goes into a specific slot--}}
    <form method="GET" action="{{ route('search') }}">
        <input type="text" name="query" value="{{ $query }}" placeholder="Search movies..." autocomplete="off" class="m-3 w-96 bg-[#252019] border border-[#3A332E] rounded px-3 py-2 text-[#EDE8E3]">
        <button type="submit" class="bg-[#C89B3C] text-[#1A16514] px-4 py-2 rounded font-medium">Submit</button>
    </form>

    @if (empty($results)) {{--check if movie exists--}}
        <p class="text-[#8A8178] mt-6">No movies to show. Try searching for something for something above.</p>
    @else 
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols4 lg:grid-cols-6 gap-4 mt-2">
            @foreach ($results as $movie)
            <a href="{{ route('movie.show', $movie['id'])}}" class="bg-[#252019] border border-[#3A332E] rounded-xl overflow-hidden block">
                @if ($movie['poster_path'])
                    <img src="https://image.tmdb.org/t/p/w500{{ $movie['poster_path']}}" alt="{{ $movie['title']}}" class="w-full aspect-[2/3] object-cover ">
                @else
                    <img src="https://via.placeholder.com/500x750?text=No+Poster" alt="No poster available" class="w-full aspect-[2/3] object-cover">
                @endif 
                <div class="p-3">
                    <h3 class="font-semibold text-sm truncate">{{ $movie['title']}}</h3>
                </div>
            </a>
            @endforeach
        </div>
    @endif
    @endsection
