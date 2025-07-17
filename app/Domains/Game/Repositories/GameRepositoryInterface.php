<?php

namespace App\Domains\Game\Repositories;

interface GameRepositoryInterface
{
    /**
     * @param array $data
     * @return mixed
     */
    public function evaluateHand(array $data): string;

    /**
     * @return string
     */
    public function startGame(): string;
}
