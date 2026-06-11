<?php

namespace App\Contracts;

interface MovieContract
{
    public function searchMovie(string $title);

    public function getMovieDetail(string $imdbID);

    public function addFavorite(array $data);

    public function getFavorites();

    public function deleteFavorite(int $id);
}