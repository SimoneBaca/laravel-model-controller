<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\movie;
class PageController extends Controller
{
    function index(){
        
        $movies = movies::all();

        return view('home', [
            "movies"=>$movies
        ]);
    }
}