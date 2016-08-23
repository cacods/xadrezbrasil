<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChessboardCell extends Model
{
    const PAWN_PIECES = 8;
    const INTERMEDIATE_PIECES = 2; // pieces between King/Queen and pawns are intermediate in power
    const FIRST_ROW_BLACK = 8;
    const SECOND_ROW_BLACK = 7;
    const FIRST_ROW_WHITE = 1;
    const SECOND_ROW_WHITE = 2;
    const FINAL_FILE = 'h';
    const FINAL_RANK = 8;

    /**
     * Initialize pieces in chessboard.
     */
    public function initializePiecesOnChessboard()
    {
        $pieces = ChessPiece::all()->toArray();

        // Put black pieces on board
        for ($rank = self::FIRST_ROW_BLACK; $rank >= self::SECOND_ROW_BLACK; $rank--) {
            for ($file = 'a'; $file <= self::FINAL_FILE; $file++) {
                $piece = array_shift($pieces);
                $cell = $this->where('file', $file)->where('rank', $rank)->first();
                $cell->current_piece = $piece['id'];
                $cell->save();
            }
        }

        // Put white pieces on board
        for ($rank = self::SECOND_ROW_WHITE; $rank >= self::FIRST_ROW_WHITE; $rank--) {
            for ($file = 'a'; $file <= self::FINAL_FILE; $file++) {
                $piece = array_shift($pieces);
                $cell = $this->where('file', $file)->where('rank', $rank)->first();
                $cell->current_piece = $piece['id'];
                $cell->save();
            }
        }
    }

    /**
     * A chessboard cell has one piece or null.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function chessPiece()
    {
        return $this->belongsTo('App\ChessPiece', 'current_piece');
    }

}
