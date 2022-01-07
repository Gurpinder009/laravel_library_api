<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name',50)->nullable(false);
            $table->string('user_email',85)->unique()->nullable(false);
            $table->string('user_phone_num',20)->unique()->nullable(false);
            $table->string('user_address',80)->nullable(false);
            $table->string('user_password',100)->nullable(false);
            $table->date('user_dob')->nullable(false);
            $table->string('user_img');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
