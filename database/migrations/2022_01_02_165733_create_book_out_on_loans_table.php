<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookOutOnLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_out_on_loans', function (Blueprint $table) {
            $table->id();
            $table->date("issue_date")->nullable(false);
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("book_id");
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->foreign('book_id')->references('book_id')->on('books');
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
        Schema::dropIfExists('book_out_on_loans');
    }
}
