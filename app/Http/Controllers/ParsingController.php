<?php

namespace App\Http\Controllers;

use App\Game;
use App\Parsing;
use App\Site;

class ParsingController extends Controller
{
    public static function updatePrice()
    {
        $games = Game::all();
        foreach ($games as $game) {
            foreach (SITES as $key => $value) {
                $site = new Site();
                $site->name = $key;
                $site->description = $game->name;
                $site->price = clearPrice(Parsing::price($key, urlName($game->name), $value));
                $site->save();
            }
        }
    }

}
