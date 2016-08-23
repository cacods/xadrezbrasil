<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ChessboardCellsTableSeeder extends Seeder
{
    /* The number of cells per file/rank (8 x 8) */
    const FINAL_FILE = 'h';
    const FINAL_RANK = 8;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
         * Seed chessboard cells with file/rank identification
         */
        for ($file = 'a'; $file <= self::FINAL_FILE; $file++) {
            for ($rank = 1; $rank <= self::FINAL_RANK; $rank++) {
                DB::table('chessboard_cells')->insert(
                    ['file' => $file,
                     'rank' => $rank,
                     'created_at' => Carbon::now(),
                     'updated_at' => Carbon::now()
                    ]
                );
            }
        }
    }
}
