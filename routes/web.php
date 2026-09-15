<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-api', function () {
    $response = Http::get('https://api.themoviedb.org/3/search/movie', [
        'api_key' => env('TMDB_API_KEY'),
        'query' => 'Inception'
    ]);
    
    return $response->json();
});

Route::get('/search', function(Illuminate\Http\Request $request) {
    
    $query = $request->query('query');

    $results = [];

    if($query) {
        $response = Http::get('https://api.themoviedb.org/3/search/movie', [
            'api_key' => env('TMDB_API_KEY'),
            'query' => $query,
        ]);
        
        $results = $response->json()['results'];
    }

    return view('search', ['results' => $results, 'query' => $query]);
})->name('search');