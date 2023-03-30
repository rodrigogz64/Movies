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
        $data = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/76600?api_key=4f82fe3f57fd801c9c601f747057654f')
        ->json();
        $data1 = Http::withToken(config('services.tmdb.token'))
        ->get('https://api.themoviedb.org/3/movie/550?api_key=4f82fe3f57fd801c9c601f747057654f')
        ->json();
        $datos = [$data, $data1];
        dump($datos);
        return view('index', ['datos'=> $datos]);
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
        //
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
