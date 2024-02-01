<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        // voglio passare la lista dei film
        $movies = Movie::all();
        // db collegato correttamente
        // dd($movies);
        // nel return inserisco quello che voglio vedere, può essere anche una stringa (in questo caso tolgo il view -> metto return 'ciao')
        return view('movies.index', ['movies' => $movies]);
    }
}
