<?php

namespace App\Domains\Game\Repositories;

class PokerfaceRepository extends BaseGameRepository
{
    /**
     * @param array $data
     * @return string
     */
    public function evaluateHand(array $data): string
    {
        return 'PokerFace';
    }

}
