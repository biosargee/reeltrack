<?php // keyword for opening tag - interpret as php code

namespace App\Http\Controllers; // Important for handling duplicate namespace; specified.

use Illuminate\Http\Request; // import for request - incoming data
use Illuminate\Support\Facades\Http; // import for http - outgoing data

class MovieController extends Controller 
{
    public function search(Request $request) // dependency injection - anything about current web request(URL, query params, form data)
    {
        $query = $request->query('query'); // -> used to access methods/properties of an object or dot notation equivalent (request.query('query'))
        $results = [];

        if ($query) {
            $response = Http::get('https://api.themoviedb.org/3/search/movie', [
                'api_key' => env('TMDB_API_KEY'),
                'query' => $query,
            ]);

            $results = $response->json()['results'];
        }

        return view('search', ['results' => $results, 'query' => $query]);
    }

    public function show($id) 
    {
        $response = Http::get("https://api.themoviedb.org/3/movie/{$id}", [
            'api_key' => env('TMDB_API_KEY'),
        ]);
        
        $movie = $response->json();
        
        return view('movie-details', ['movie' => $movie]);
    }
}
