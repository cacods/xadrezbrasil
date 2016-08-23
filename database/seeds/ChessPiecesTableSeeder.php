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
         * Insert dark pieces
         */

        /*
         * Dark King
         */
        DB::table('chess_pieces')->insert([
            'code' => 'K',
            'unicode' => '265A',
            'html_code' => '&#9818;',
            'name' => 'King',
            'is_dark' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Dark Queen
         */
        DB::table('chess_pieces')->insert([
            'code' => 'Q',
            'unicode' => '265B',
            'html_code' => '&#9819;',
            'name' => 'Queen',
            'is_dark' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Dark Rooks
         */
        for ($rook = 1; $rook <= self::ROOKS; $rook++) {
            DB::table('chess_pieces')->insert([
                'code' => 'R' . $rook,
                'unicode' => '265C',
                'html_code' => '&#9820;',
                'name' => 'Rook',
                'is_dark' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Dark Bishops
         */
        for ($bishop = 1; $bishop <= self::BISHOPS; $bishop++) {
            DB::table('chess_pieces')->insert([
                'code' => 'B' . $bishop,
                'unicode' => '265D',
                'html_code' => '&#9821;',
                'name' => 'Bishop',
                'is_dark' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Dark Knights
         */
        for ($knight = 1; $knight <= self::KNIGHTS; $knight++) {
            DB::table('chess_pieces')->insert([
                'code' => 'K' . $knight,
                'unicode' => '265E',
                'html_code' => '&#9822;',
                'name' => 'Knight',
                'is_dark' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Dark Pawns
         */
        for ($pawn = 1; $pawn <= self::PAWNS; $pawn++) {
            DB::table('chess_pieces')->insert([
                'code' => 'P' . $pawn,
                'unicode' => '265F',
                'html_code' => '&#9823;',
                'name' => 'Pawn',
                'is_dark' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /**
         * Insert light pieces
         */
        /*
         * Light King
         */
        DB::table('chess_pieces')->insert([
            'code' => 'K',
            'unicode' => '2654',
            'html_code' => '&#9812;',
            'name' => 'King',
            'is_dark' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Light Queen
         */
        DB::table('chess_pieces')->insert([
            'code' => 'Q',
            'unicode' => '2655',
            'html_code' => '&#9813;',
            'name' => 'Queen',
            'is_dark' => false,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        /*
         * Light Rooks
         */
        for ($rook = 1; $rook <= self::ROOKS; $rook++) {
            DB::table('chess_pieces')->insert([
                'code' => 'R' . $rook,
                'unicode' => '2656',
                'html_code' => '&#9814;',
                'name' => 'Rook',
                'is_dark' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Light Bishops
         */
        for ($bishop = 1; $bishop <= self::BISHOPS; $bishop++) {
            DB::table('chess_pieces')->insert([
                'code' => 'B' . $bishop,
                'unicode' => '2657',
                'html_code' => '&#9815;',
                'name' => 'Bishop',
                'is_dark' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Light Knights
         */
        for ($knight = 1; $knight <= self::KNIGHTS; $knight++) {
            DB::table('chess_pieces')->insert([
                'code' => 'K' . $knight,
                'unicode' => '2658',
                'html_code' => '&#9816;',
                'name' => 'Knight',
                'is_dark' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }

        /*
         * Light Pawns
         */
        for ($pawn = 1; $pawn <= self::PAWNS; $pawn++) {
            DB::table('chess_pieces')->insert([
                'code' => 'P' . $pawn,
                'unicode' => '2659',
                'html_code' => '&#9817;',
                'name' => 'Pawn',
                'is_dark' => false,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
