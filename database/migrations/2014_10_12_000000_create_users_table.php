<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 100);
            $table->string('email', 45)->unique();
            $table->string('password');
            $table->string('avatar');
            $table->enum('role', array('admin', 'publisher', 'user'));
            $table->string('web', 45)->unique();
            $table->string('twitter', 45)->unique();
            $table->string('facebook', 45)->unique();
            $table->text('biography');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
