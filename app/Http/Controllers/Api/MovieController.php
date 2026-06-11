<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Contracts\MovieContract;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    protected $movieService;

    public function __construct(MovieContract $movieService)
    {
        $this->movieService = $movieService;
    }

    // Search Movie
    public function search(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $movies = $this->movieService->searchMovie(
            $request->title
        );

        return response()->json([
            'status' => 'success',
            'data' => $movies
        ]);
    }

    // Get Movie Detail
    public function detail($imdbID)
    {
        $movie = $this->movieService->getMovieDetail($imdbID);

        return response()->json([
            'status' => 'success',
            'data' => $movie
        ]);
    }
}