<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChessboardCell extends Model
{
    const FIRST_ROW_BLACK = 8;
    const SECOND_ROW_BLACK = 7;
    const FIRST_ROW_WHITE = 1;
    const SECOND_ROW_WHITE = 2;
    const FINAL_FILE = 'h';

    /**
     * Initialize pieces on chessboard.
     *
     * The pieces table has been seeded with pieces
     * arranged in up/down, left/right order, so we
     * can securily make a loop in cells in that order
     * to put the pieces in right files/ranks.
     */
    public function initializePiecesOnChessboard()
    {
        $blackPieces = ChessPiece::isBlack()->get()->toArray();
        $whitePieces = ChessPiece::isWhite()->get()->toArray();

        $this->putPiecesInitialPosition($blackPieces, true);
        $this->putPiecesInitialPosition($whitePieces, false);
    }

    /**
     * Put pieces in their initial positions on board.
     *
     * @param $pieces
     * @param $isBlack
     */
    private function putPiecesInitialPosition($pieces, $isBlack)
    {
        $firstRank = self::FIRST_ROW_BLACK;
        $secondRank = self::SECOND_ROW_BLACK;
        
        if (! $isBlack) {
            $firstRank = self::SECOND_ROW_WHITE;
            $secondRank = self::FIRST_ROW_WHITE;
        }

        for ($rank = $firstRank; $rank >= $secondRank; $rank--) {
            for ($file = 'a'; $file <= self::FINAL_FILE; $file++) {
                $piece = array_shift($pieces);
                $cell = $this->where('file', $file)->where('rank', $rank)->first();
                $cell->current_piece = $piece['id'];
                $cell->save();
            }
        }
    }

    /*----- Query Scopes -----*/
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
