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
            foreach (SITES as $value) {
                $site = new Site();
                $site->name = $value;
                $site->description = $game->name;
                $site->price = clearPrice(Parsing::price($value, urlName($game->name)));
                $site->save();
            }
        }
    }

}
