<?php

namespace App\Domains\Game\Repositories;

use App\Domains\Game\Repositories\GameRepositoryInterface;

abstract class BaseGameRepository implements GameRepositoryInterface
{
    /**
     * @param array $data
     * @return string
     */
    public function evaluateHand(array $data ): string
    {
        // Default implementation for evaluating a game hand
        return 'Base Game';
    }

    /**
     * @return string
     */
    public function startGame(): string
    {
        // Default implementation for starting a game
        return 'Game started';
    }
}
