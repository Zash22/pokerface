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

    public function pokerfaceEvaluate(Request $request)
    {
        $data = ['pokerface'];
        return $this->pokerfaceRepository->evaluate($data);
    }

    public function chessEvaluate(Request $request)
    {
        $data = ['chess'];
        return $this->chessRepository->evaluate($data);
    }

}
