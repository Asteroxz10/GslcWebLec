<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index(){

        $pokemonData = Pokemon::all();

        return view('home', compact('pokemonData'));
    }
}
