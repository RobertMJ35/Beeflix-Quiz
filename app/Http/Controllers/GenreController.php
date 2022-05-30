<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenreController extends Controller
{
    public function home(){
        return view('home', [
            'genres' => Genre::all(),
            'movies' => Movie::orderBy('genre_id')->get()
        ]);
    }
}
