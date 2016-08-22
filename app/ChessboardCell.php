<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChessboardCell extends Model
{
    const PAWN_PIECES = 8;
    const INTERMEDIATE_PIECES = 2;

    /**
     * Initialize pieces in chessboard.
     */
    public function initializePiecesOnChessboard()
    {
        //Put initial position of dark pawns
        for ($pawn = 1; $pawn <= self::PAWN_PIECES; $pawn++) {
            $chessPiece = ChessPiece::where('code', 'P' . $pawn)->isDark()->get();
        }
    }
}
