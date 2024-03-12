<?php

namespace App\Domains\Game\Repositories;
class ChessRepository extends BaseGameRepository
{
    /**
     * @param array $data
     * @return string
     */
    public function evaluateHand(array $data): string
    {
        return 'Chess';
    }

    /**
     * @return string
     */
    public function startGame(): string
    {
    }
}
