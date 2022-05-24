<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $game = new Game;
        $game->name     = 'The Legend of Zelda BOT';
        $game->imagen        = 'images/zelda-bot.png';
        $game->description  = 'Lorem Ipsum Dolor';
        $game->user_id      = 1;
        $game->category_id  = 1;
        $game->slider       = 1;
        $game->price        = 55;
        $game->save();

        $game = new Game;
        $game->name     = 'Halo Infinite';
        $game->imagen        = 'images/halo-infinite.png';
        $game->description  = 'Lorem Ipsum Dolor';
        $game->user_id      = 1;
        $game->category_id  = 2;
        $game->slider       = 0;
        $game->price        = 45;
        $game->save();
    }
}
