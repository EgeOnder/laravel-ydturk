<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TVShowsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $shows = Http::get('https://api.themoviedb.org/3/tv/top_rated?api_key=' . config('services.tmdb.token') . '&language=tr-TR&page=' . $id)
            ->json();

        $populerShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json()['results'];

        return view('dizi', [
            'popularShows' => $populerShows,
            'id' => $id,
            'shows' => $shows
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
        $show = Http::get('https://api.themoviedb.org/3/tv/' . $id  . '?api_key=' . config('services.tmdb.token') . '&language=tr-TR&append_to_response=credits,images,videos')
            ->json();

        $populerShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json()['results'];

        return view('dizi-show', [
            'show' => $show,
            'popularShows' => $populerShows
        ]);
    }
}
