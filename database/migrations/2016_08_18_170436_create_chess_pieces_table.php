<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChessPiecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chess_pieces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 2);
            $table->string('unicode', 4);
            $table->string('html_code', 4);
            $table->string('name');
            $table->boolean('is_dark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chess_pieces');
    }
}
