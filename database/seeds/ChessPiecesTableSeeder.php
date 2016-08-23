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
         * Second Black Rook
         */
        DB::table('chess_pieces')->insert([
            'code' => 'R2',
            'unicode' => '265C',
            'html_code' => '&#9820;',
            'name' => 'Rook',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Second Black Knight
         */
        DB::table('chess_pieces')->insert([
            'code' => 'K2',
            'unicode' => '265E',
            'html_code' => '&#9822;',
            'name' => 'Knight',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Second Black Bishop
         */
        DB::table('chess_pieces')->insert([
            'code' => 'B2',
            'unicode' => '265D',
            'html_code' => '&#9821;',
            'name' => 'Bishop',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

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
         * First Black Bishop
         */
        DB::table('chess_pieces')->insert([
            'code' => 'B1',
            'unicode' => '265D',
            'html_code' => '&#9821;',
            'name' => 'Bishop',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * First Black Knight
         */
        DB::table('chess_pieces')->insert([
            'code' => 'K1',
            'unicode' => '265E',
            'html_code' => '&#9822;',
            'name' => 'Knight',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * First Black Rook
         */
        DB::table('chess_pieces')->insert([
            'code' => 'R1',
            'unicode' => '265C',
            'html_code' => '&#9820;',
            'name' => 'Rook',
            'is_black' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

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
         * Second White Bishop
         */
        DB::table('chess_pieces')->insert([
            'code' => 'B2',
            'unicode' => '2657',
            'html_code' => '&#9815;',
            'name' => 'Bishop',
            'is_black' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Second White Knight
         */
        DB::table('chess_pieces')->insert([
            'code' => 'K2',
            'unicode' => '2658',
            'html_code' => '&#9816;',
            'name' => 'Knight',
            'is_black' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Second White Rook
         */
        DB::table('chess_pieces')->insert([
            'code' => 'R2',
            'unicode' => '2656',
            'html_code' => '&#9814;',
            'name' => 'Rook',
            'is_black' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

}
