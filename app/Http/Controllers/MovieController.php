<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movie (Request $req){
        return view ('genre', [
            'genre' => Genre::where('id', $req->id)->get()->first(),
            'movies' => Movie::where('genre_id', $req->id)->get()
        ]);
    }
}
