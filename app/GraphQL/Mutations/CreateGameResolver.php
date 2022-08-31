<?php

namespace App\GraphQL\Mutations;

use App\Models\Game;

final class CreateGameResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $game = Game::create([
            'name' => $args['name'],
            'description' => $args['description'],
            'age' => $args['age'],
            'year' => $args['year'],
            'category_id' => $args['category_id']
        ]);

        $game->platforms()->attach($args['platform_id']);

        return $game;
    }
}
