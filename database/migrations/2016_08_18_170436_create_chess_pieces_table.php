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
            $table->string('code');
            $table->string('unicode');
            $table->string('html_code');
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
