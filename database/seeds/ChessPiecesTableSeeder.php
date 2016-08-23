<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ChessPiecesTableSeeder extends Seeder
{
    /* Number of pieces that repeats */
    const PAWNS = 8;
    const ROOKS = 2;
    const KNIGHTS = 2;
    const BISHOPS = 2;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Insert black pieces
         */

        /*
         * Black King
         */
        DB::table('chess_pieces')->insert([
            'code' => 'K',
            'unicode' => '265A',
            'html_code' => '&#9818;',
            'name' => 'King',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Black Queen
         */
        DB::table('chess_pieces')->insert([
            'code' => 'Q',
            'unicode' => '265B',
            'html_code' => '&#9819;',
            'name' => 'Queen',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Black Rooks
         */
        for ($rook = 1; $rook <= self::ROOKS; $rook++) {
            DB::table('chess_pieces')->insert([
                'code' => 'R' . $rook,
                'unicode' => '265C',
                'html_code' => '&#9820;',
                'name' => 'Rook',
                'is_black' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Black Knights
         */
        for ($knight = 1; $knight <= self::KNIGHTS; $knight++) {
            DB::table('chess_pieces')->insert([
                'code' => 'K' . $knight,
                'unicode' => '265E',
                'html_code' => '&#9822;',
                'name' => 'Knight',
                'is_black' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Black Bishops
         */
        for ($bishop = 1; $bishop <= self::BISHOPS; $bishop++) {
            DB::table('chess_pieces')->insert([
                'code' => 'B' . $bishop,
                'unicode' => '265D',
                'html_code' => '&#9821;',
                'name' => 'Bishop',
                'is_black' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Black Pawns
         */
        for ($pawn = 1; $pawn <= self::PAWNS; $pawn++) {
            DB::table('chess_pieces')->insert([
                'code' => 'P' . $pawn,
                'unicode' => '265F',
                'html_code' => '&#9823;',
                'name' => 'Pawn',
                'is_black' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /**
         * Insert white pieces
         */
        /*
         * White King
         */
        DB::table('chess_pieces')->insert([
            'code' => 'K',
            'unicode' => '2654',
            'html_code' => '&#9812;',
            'name' => 'King',
            'is_black' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * White Queen
         */
        DB::table('chess_pieces')->insert([
            'code' => 'Q',
            'unicode' => '2655',
            'html_code' => '&#9813;',
            'name' => 'Queen',
            'is_black' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * White Rooks
         */
        for ($rook = 1; $rook <= self::ROOKS; $rook++) {
            DB::table('chess_pieces')->insert([
                'code' => 'R' . $rook,
                'unicode' => '2656',
                'html_code' => '&#9814;',
                'name' => 'Rook',
                'is_black' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * White Knights
         */
        for ($knight = 1; $knight <= self::KNIGHTS; $knight++) {
            DB::table('chess_pieces')->insert([
                'code' => 'K' . $knight,
                'unicode' => '2658',
                'html_code' => '&#9816;',
                'name' => 'Knight',
                'is_black' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * White Bishops
         */
        for ($bishop = 1; $bishop <= self::BISHOPS; $bishop++) {
            DB::table('chess_pieces')->insert([
                'code' => 'B' . $bishop,
                'unicode' => '2657',
                'html_code' => '&#9815;',
                'name' => 'Bishop',
                'is_black' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * White Pawns
         */
        for ($pawn = 1; $pawn <= self::PAWNS; $pawn++) {
            DB::table('chess_pieces')->insert([
                'code' => 'P' . $pawn,
                'unicode' => '2659',
                'html_code' => '&#9817;',
                'name' => 'Pawn',
                'is_black' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
