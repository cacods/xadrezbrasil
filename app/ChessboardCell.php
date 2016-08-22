<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChessboardCell extends Model
{
    const PAWN_PIECES = 8;
    const INTERMEDIATE_PIECES = 2; // pieces between King/Queen and pawns are intermediate in power
    const FIRST_ROW_BLACK = 1;
    const SECOND_ROW_BLACK = 2;
    const FIRST_ROW_WHITE = 8;
    const SECOND_ROW_WHITE = 7;

    /**
     * Initialize pieces in chessboard.
     */
    public function initializePiecesOnChessboard()
    {
        // Get pieces
        $blackPawns = $this->getPieces('pawn', 'dark');
        $whitePawns = $this->getPieces('pawn', 'light');
        $blackRooks = $this->getPieces('rook', 'dark');
        $whiteRooks = $this->getPieces('rook', 'light');
        $blackKnights = $this->getPieces('knight', 'dark');
        $whiteKnights = $this->getPieces('knight', 'light');
        $blackBishops = $this->getPieces('bishop', 'dark');
        $whiteBishops = $this->getPieces('bishop', 'light');
        $blackQueen = $this->getPieces('queen', 'dark');
        $whiteQueen = $this->getPieces('queen', 'light');
        $blackKing = $this->getPieces('king', 'dark');
        $whiteKing = $this->getPieces('king', 'light');

        // Put pieces on initial board positions
        $this->putPieces('pawn', 'black', $blackPawns);
        $this->putPieces('pawn', 'white', $whitePawns);
        $this->putPieces('rook', 'black', $blackRooks);
        $this->putPieces('rook', 'white', $whiteRooks);
        $this->putPieces('knight', 'black', $blackKnights);
        $this->putPieces('knight', 'white', $whiteKnights);
        $this->putPieces('bishop', 'black', $blackBishops);
        $this->putPieces('bishop', 'white', $whiteBishops);
        $this->putPieces('queen', 'black', $blackQueen);
        $this->putPieces('queen', 'white', $whiteQueen);
        $this->putPieces('king', 'black', $blackKing);
        $this->putPieces('king', 'white', $whiteKing);
    }


    /**
     * Get player's pieces.
     *
     * @param $piece
     * @param $player
     * @return array
     */
    public function getPieces($piece, $player)
    {
        if ($player == 'dark') {
            $isDark = true;
        } else {
            $isDark = false;
        }

        $quantity = self::INTERMEDIATE_PIECES; // initializes with common case

        switch ($piece) {
            case 'pawn':
                $codePrefix = 'P';
                $quantity = self::PAWN_PIECES;
                break;
            case 'rook':
                $codePrefix = 'R';
                break;
            case 'knight':
                $codePrefix = 'K';
                break;
            case 'bishop':
                $codePrefix = 'B';
                break;
            case 'king':
                return ChessPiece::where('code', 'K')->where('is_dark', $isDark)->get();
            case 'queen':
                return ChessPiece::where('code', 'Q')->where('is_dark', $isDark)->get();
            default:
                // TODO: Generates exception (?)
        }

        $pieces = [];
        for ($pieceNumber = 1; $pieceNumber <= $quantity; $pieceNumber++) {
            $pieces[] = ChessPiece::where('code', $codePrefix . $pieceNumber) //TODO: verificar se deve corrigir $codePrefix
            ->where('is_dark', $isDark)
                ->first();
        }

        return $pieces;
    }

    /**
     * Put pieces in initial positions
     *
     * @param $piece
     * @param $player
     * @param $piecesArray
     */
    private function putPieces($piece, $player, $piecesArray)
    {
        // Defines rank to put pieces
        if ($piece == 'pawn') {
            // TODO: melhor abordagem aqui? Está passando se $player é qualquer coisa menos 'white'
            $rank = self::SECOND_ROW_BLACK;
            if ($player == 'white') {
                $rank = self::SECOND_ROW_WHITE;
            }
        } else {
            // TODO: melhor abordagem aqui? Está passando se $player é qualquer coisa menos 'white'
            $rank = self::FIRST_ROW_BLACK;
            if ($player == 'white') {
                $rank = self::FIRST_ROW_WHITE;
            }
        }

        // Put pieces on board
        if ($piece == 'pawn') {
            for ($file = 'a'; $file <= 'h'; $file++) {
                $pawnPiece = array_shift($piecesArray);
                $this->putPieceOnBoard($file, $rank, $pawnPiece);
            }
        }
        if ($piece == 'rook') {
            $file = 'a';
            foreach ($piecesArray as $rookPiece) {
                $this->putPieceOnBoard($file, $rank, $rookPiece);
                $file = 'h';
            }
        }
        if ($piece == 'knight') {
            $file = 'b';
            foreach ($piecesArray as $knightPiece) {
                $this->putPieceOnBoard($file, $rank, $knightPiece);
                $file = 'g';
            }
        }
        if ($piece == 'bishop') {
            $file = 'c';
            foreach ($piecesArray as $bishopPiece) {
                $this->putPieceOnBoard($file, $rank, $bishopPiece);
                $file = 'f';
            }
        }
        if ($piece == 'queen') {
            $this->putPieceOnBoard('d', $rank, $piecesArray[0]);
        }
        if ($piece == 'king') {
            $this->putPieceOnBoard('e', $rank, $piecesArray[0]);
        }
    }

    /**
     * Put one piece in board cell
     *
     * @param $file
     * @param $rank
     * @param $piece
     */
    public function putPieceOnBoard($file, $rank, $piece)
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
