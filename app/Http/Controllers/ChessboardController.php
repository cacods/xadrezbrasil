<?php

namespace App\Http\Controllers;

use App\ChessboardCell;
use Illuminate\Http\Request;

use App\Http\Requests;

class ChessboardController extends Controller
{
    /**
     * Initial position of chess pieces.
     *
     */
    public function index()
    {
        $chessboard = new ChessboardCell;
        $chessboard->initializePiecesOnChessboard();

        dd();


        return view('chessboard');
    }
}
