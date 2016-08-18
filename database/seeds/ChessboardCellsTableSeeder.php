<?php

use Illuminate\Database\Seeder;

class ChessboardCellsTableSeeder extends Seeder
{
    /* The number of cells per file/per rank (8 x 8) */
    const CELLS_PER_FILE = 'h';
    const CELLS_PER_RANK = 8;

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
        for ($file = 'a'; $file <= self::CELLS_PER_FILE; $file++) {
            for ($rank = 1; $rank <= self::CELLS_PER_RANK; $rank++) {
                DB::table('chessboard_cells')->insert(
                    ['file' => $file, 'rank' => $rank]
                );
            }
        }
    }
}
