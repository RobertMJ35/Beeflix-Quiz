<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use App\Models\Movie;
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function episode (Request $req){
        return view ('detail', [
            'movie' => Movie::where('id', $req->id)->get()->first(),
            'episodes' => Episode::where('movie_id', $req->id)->paginate(3)
        ]);
    }
}
