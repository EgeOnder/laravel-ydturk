<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularMovies = Http::get('https://api.themoviedb.org/3/movie/popular?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json()['results'];

        $populerShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json()['results'];

        return view('index', [
            'popularMovies' => $popularMovies,
            'popularShows' => $populerShows
        ]);
    }
}
