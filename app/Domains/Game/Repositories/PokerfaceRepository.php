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

        //1. decide on how you will evaluate hand
        //      ie. send call to chatgpt if internet access else use package(Most Likely something well supported from packagist.com)/library to determine evaluate return, lets call them vendors.
        //2. create factory for each vendor and gather and transform info for appropriate vendor. create auth token, prepare call & make call or inject dependencies in vendor factory eg. /Vendors/ChatGpt and Composer/Vendor/EvaluatePackage.
    }

}
