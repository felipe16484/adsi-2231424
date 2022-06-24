<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $games = Game::all();
        return view('games.index')->with('games', $games);
        // $users = User::paginate(20); para paginar la cantidad de usuarios que se desea ver
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('games.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $game = new Game;
        $game->name        = $request->name;
        $game->imagen      = $request->imagen;
        $game->description = $request->description;
        $game->user_id     = $request->user_id;
        $game->category_id = $request->category_id;
        $game->slider      = $request->slider;
        $game->price       = $request->price;
        if($game->save()){
            return redirect('games')->with('message', 'The game: '.$game->fullname.' was successfully added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('games.show')->with('game', $game);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        return view('games.edit')->with('game', $game);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        $game->name        = $request->name;
        $game->imagen      = $request->imagen;
        $game->description = $request->description;
        $game->user_id     = $request->user_id;
        $game->category_id = $request->category_id;
        $game->slider      = $request->slider;
        $game->price       = $request->price;
        if($game->save()){
            return redirect('games')->with('message', 'The game: '.$game->name.' was successfully edited!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        if($game->delete()){
            return redirect('games')->with('message', 'The game: '.$game->name.' was successfully deleted!');
        }
    }
}
