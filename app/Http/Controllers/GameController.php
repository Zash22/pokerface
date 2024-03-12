<?php
namespace App\Http\Controllers;

use App\Domains\Game\Repositories\PokerfaceRepository;
use App\Domains\Game\Repositories\ChessRepository;
use Illuminate\Http\Request;

class GameController extends Controller
{
    protected PokerfaceRepository $pokerfaceRepository;
    protected ChessRepository $chessRepository;

    public function __construct(PokerfaceRepository $pokerfaceRepository, ChessRepository $chessRepository)
    {
        $this->pokerfaceRepository = $pokerfaceRepository;
        $this->chessRepository = $chessRepository;
    }

    public function pokerfaceEvaluate(Request $request): string
    {
        $data = ['pokerface'];
        return $this->pokerfaceRepository->evaluateHand($data);
    }

    public function pokerfaceStartGame(Request $request): string
    {
        return $this->pokerfaceRepository->startGame();
    }

    public function chessEvaluate(Request $request): string
    {
        $data = ['chess'];
        return $this->chessRepository->evaluateHand($data);
    }

}
