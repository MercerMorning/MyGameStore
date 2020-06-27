<?php

namespace App\Http\Controllers;

use App\Game;
use App\Http\Requests\GameRequest;
use Illuminate\Http\Request;

class GameController extends Controller
{
    function create()
    {
        return view('gamecave.games.create');
    }

    function edit($game)
    {
        return view('gamecave.games.edit', ['game' => $game]);
    }

    function add(BookRequest $request)
    {
        $book = new Book();
        $book->name = $request->name;
        $book->price = $request->price;
        $book->save();
        return redirect()->route('books');
    }


    function save(GameRequest $request)
    {
        $game = Game::query()->find($request->id);
        $game->name = $request->name;
        $game->price = $request->price;
        $game->image = $request->image;
        $game->description = $request->description;
        $game->category = $request->category;
        $game->save();
        return redirect()->route('admin.list');
    }

    function delete(GameRequest $request)
    {
        Game::destroy($request->id);
        return redirect()->route('admin.list');
    }
}
