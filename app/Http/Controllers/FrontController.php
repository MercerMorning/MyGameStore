<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Game;
use App\Parsing;
use App\Site;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\AbstractUriElement;
use Symfony\Component\DomCrawler\Crawler;

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

    public function single($game)
    {
        $comments = Comment::all()->where('game_id', '=', $game);
        $game = Game::query()->find($game);
        $prices = Site::query()
            ->where('description', '=', $game->name)
            ->orderByDesc('created_at')
            ->limit(count(SITES))
            ->get();
        $table = Site::query()
            ->where('description', '=', $game->name)
            ->orderByDesc('created_at')
            ->get();
        $nameForLink = urlName($game->name);
        return view('gamecave.games.single', ['game' => $game, 'prices' => $prices, 'nameForLink' => $nameForLink, 'comments' => $comments, 'table' => $table]);
    }

    public function link($siteName, $gameName)
    {
        $site = SITES[$siteName];
        return redirect(getFullAddress($site['name'] . $site['domen'] . $site['dir'], urlName($gameName)));
    }
}
