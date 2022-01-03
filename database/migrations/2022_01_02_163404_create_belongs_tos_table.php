<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBelongsTosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('belongs_tos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('book_id')->nullable(false);
            $table->unsignedBigInteger('category_id')->nullable(false);
            $table->foreign('book_id')->references('book_id')->on('books');
            $table->foreign('category_id')->references('category_id')->on('categories');
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
        Schema::dropIfExists('belongs_tos');
    }
}
