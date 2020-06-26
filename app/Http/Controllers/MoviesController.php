<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $movies = Http::get('https://api.themoviedb.org/3/movie/top_rated?api_key=' . config('services.tmdb.token') . '&language=tr-TR&page=' . $id)
            ->json();

        $populerShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json()['results'];

        return view('film', [
            'movies' => $movies,
            'id' => $id,
            'popularShows' => $populerShows
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie = Http::get('https://api.themoviedb.org/3/movie/' . $id  . '?api_key=' . config('services.tmdb.token') . '&language=tr-TR&append_to_response=credits,images,videos')
            ->json();

        $populerShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json()['results'];

        return view('film-show', [
            'movie' => $movie,
            'popularShows' => $populerShows
        ]);
    }
}
