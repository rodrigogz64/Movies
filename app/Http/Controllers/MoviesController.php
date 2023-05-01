<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //popular Movies
        $trendingmovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/trending/all/day?api_key=4f82fe3f57fd801c9c601f747057654f')
        ->json()['results'];
        //now playing movies
        $nowPlayingMovies = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/now_playing?api_key=4f82fe3f57fd801c9c601f747057654f&language=en-US&page=1')
        ->json()['results'];
        //Movies Genres id
        $allGenres = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/genre/movie/list?api_key=4f82fe3f57fd801c9c601f747057654f&language=en-US')
        ->json()['genres'];
        //Movies Genres by name
        $genres = collect($allGenres)->mapWithKeys(function ($idgen){
            return [$idgen['id']=>$idgen['name']];
        });

        //dump($trendingmovies);
        //dump($nowPlayingMovies);
        return view('index', [
            'trendingmovies'=> $trendingmovies, 
            'genres'=>$genres,
            'nowPlayingMovies'=>$nowPlayingMovies ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //description of each movie
        $details = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'. $id .'?api_key=4f82fe3f57fd801c9c601f747057654f&language=en-US')
        ->json();
        //cast for each movie
        $actors = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'. $id .'/credits?api_key=4f82fe3f57fd801c9c601f747057654f&language=en-US')
        ->json()['cast'];
        //videos
        $videos = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/'. $id .'/videos?api_key=4f82fe3f57fd801c9c601f747057654f&language=en-US')
        ->json()['results'];

        //dump($videos);

        return view('show', ['details'=>$details,
            'actors'=> $actors,
            'videos'=> $videos
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
