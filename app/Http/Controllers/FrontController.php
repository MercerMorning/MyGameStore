<?php

namespace App\Http\Controllers;

use App\Game;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function main()
    {
        return view('gamecave.main');
    }

    public function list()
    {
        $games = Game::all();
        return view('gamecave.games.list', ['games' => $games]);
    }
}
