<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrittenBiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('written_bies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('author_id')->nullable(false);
            $table->unsignedBigInteger('book_id')->nullable(false);
            $table->foreign('book_id')->references("book_id")->on("books");
            $table->foreign('author_id')->references("author_id")->on('authors');
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
        Schema::dropIfExists('written_bies');
    }
}
