<?php

namespace App\Http\Controllers;

use App\Game;

class AdminController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('gamecave.admin.list', ['games' => $games]);
    }
}
