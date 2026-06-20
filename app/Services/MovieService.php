<?php

namespace App\Services;

use App\Models\Favorite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Contracts\MovieContract;

class MovieService implements MovieContract
{
    protected $apiKey;

    public function __construct()
    {
        $this->apiKey = env('OMDB_API_KEY');
    }

    public function searchMovie(string $title)
    {
        $response = Http::get('http://www.omdbapi.com/', [
            'apikey' => $this->apiKey,
            's' => $title
        ]);

        return $response->json();
    }

    public function getMovieDetail(string $imdbID)
    {
        $response = Http::get('http://www.omdbapi.com/', [
            'apikey' => $this->apiKey,
            'i' => $imdbID
        ]);

        return $response->json();
    }

    public function addFavorite(array $data)
    {
        return Favorite::create([
            'user_id' => Auth::id(),
            'imdbID' => $data['imdbID'],
            'title' => $data['title'],
        ]);
    }

    public function getFavorites()
    {
        return Favorite::where('user_id', Auth::id())->get();
    }

    public function deleteFavorite(int $id)
    {
        return Favorite::where('id', $id)
            ->where('user_id', Auth::id())
            ->delete();
    }
}