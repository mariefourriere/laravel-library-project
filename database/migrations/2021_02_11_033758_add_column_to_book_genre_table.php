<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToBookGenreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('book_genre', function (Blueprint $table) {
          
                $table->unsignedBigInteger('genre_id');
                $table->unsignedBigInteger('book_id');
                $table->foreign('book_id')->references('id')->on('books');

            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('book_genre', function (Blueprint $table) {
            
            $table->dropForeign(['book_id']);
            $table->dropForeign(['genre_id']);
        });
    }
}
