<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChessboardCellsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chessboard_cells', function (Blueprint $table) {
            $table->increments('id');
            $table->char('file');
            $table->tinyInteger('rank')->unsigned();
            $table->integer('current_piece')->unsigned()->nullable();
            $table->timestamps();

            $table->foreign('current_piece')->references('id')->on('chess_pieces');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chessboard_cells');
    }
}
