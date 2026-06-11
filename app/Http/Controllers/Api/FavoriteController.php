<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Favorite;

class FavoriteController extends Controller
{
    // Tambah film favorit
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imdb_id' => 'required|string',
            'title' => 'required|string',
            'poster' => 'nullable|string',
            'year' => 'nullable|string',
        ]);

        $favorite = Favorite::create([
            'user_id' => auth()->id(),
            'imdb_id' => $validated['imdb_id'],
            'title' => $validated['title'],
            'poster' => $validated['poster'] ?? null,
            'year' => $validated['year'] ?? null,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Movie added to favorites',
            'data' => $favorite
        ], 201);
    }

    // Tampilkan semua favorit user
    public function index()
    {
        $favorites = Favorite::where('user_id', auth()->id())->get();

        return response()->json([
            'status' => 'success',
            'data' => $favorites
        ]);
    }

    // Hapus favorit
    public function destroy($id)
    {
        $favorite = Favorite::where('user_id', auth()->id())
            ->findOrFail($id);

        $favorite->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Movie removed from favorites'
        ]);
    }
}