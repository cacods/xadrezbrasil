<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChessboardCell extends Model
{
    const PAWN_PIECES = 8;
    const INTERMEDIATE_PIECES = 2;
    const DARK_PAWNS_INITIAL_RANK = 2;
    const LIGHT_PAWNS_INITIAL_RANK = 7;

    /**
     * Initialize pieces in chessboard.
     */
    public function initializePiecesOnChessboard()
    {
        // Get dark pawn pieces id's
        $pawnPieces = $this->getPawns('dark');

        // Put dark pawn pieces on initial board positions
        for ($file = 'a'; $file <= 'h'; $file++) {
            $pawnPiece = array_shift($pawnPieces);
            $this->putPieceOnBoard($file, self::DARK_PAWNS_INITIAL_RANK, $pawnPiece);
        }


    }

    /**
     * Get pawns of a player
     *
     * @param $player
     * @return array
     */
    private function getPawns($player)
    {
        if ($player == 'dark') {
            $isDark = true;
        } else {
            $isDark = false;
        }

        $pawnPieces = [];
        for ($pawn = 1; $pawn <= self::PAWN_PIECES; $pawn++) {
            $pawnPieces[] = ChessPiece::where('code', 'P' . $pawn)
                ->where('is_dark', $isDark)
                ->first();
        }
        return $pawnPieces;
    }

    /**
     * Put one piece in board cell
     *
     * @param $file
     * @param $rank
     * @param $piece
     */
    private function putPieceOnBoard($file, $rank, $piece)
    {
        $chessboardCell = ChessboardCell::where('file', $file)
            ->where('rank', $rank)
            ->first();

        if (is_null($chessboardCell)) {
            // Gera excessão: não pegou a célula
        }
        $chessboardCell->current_piece = $piece->id;

        $chessboardCell->save();
    }

}
