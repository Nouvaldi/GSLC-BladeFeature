<?php

namespace App\Http\Controllers;

use App\Models\Champion;
use Illuminate\Http\Request;

class ChampionController extends Controller
{
    public function index(){
        $champions = Champion::all();
        return view('champions', compact('champions'));
    }

    public function idx($name){
        $champions = Champion::where('name', $name)->first();
        return view('champion', compact('champions'));
    }
}
