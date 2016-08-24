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
        $chessboardCell = new ChessboardCell;
        $chessboardCell->initializePiecesOnChessboard();

        $chessboard = $this->objectCellsToArray($chessboardCell->all());

        return view('chessboard', compact('chessboard'));
    }

    /**
     * Make matrix to ease process of positioning pieces on board in view.
     *
     * @param $chessboardInitial
     * @return array
     */
    private function objectCellsToArray($chessboardInitial)
    {
        $chessboard = [];
        foreach ($chessboardInitial as $cell) {
            if (!is_null($cell->chessPiece)) {
                $chessboard[$cell->file][$cell->rank] = $cell->chessPiece->html_code;
            } else {
                $chessboard[$cell->file][$cell->rank] = null;
            }
        }
        return $chessboard;
    }
}
