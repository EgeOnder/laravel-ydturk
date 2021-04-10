<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $person = Http::get('https://api.themoviedb.org/3/person/' . $id  . '?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json();

        $populerShows = Http::get('https://api.themoviedb.org/3/tv/popular?api_key=' . config('services.tmdb.token') . '&language=tr-TR')
            ->json()['results'];

        return view('people.person-show', [
            'person' => $person,
            'popularShows' => $populerShows
        ]);
    }
}
