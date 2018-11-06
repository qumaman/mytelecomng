<?php

use Illuminate\Support\Facades\Schema;
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
            $table->string('sname');
            $table->string('fname');
            $table->string('pname');
            $table->integer('photo_id')->nullable();
            $table->string('email')->unique();
            $table->integer('position_id')->nullable();
            $table->timestamp('email_verified_at');
            $table->string('phone');
            $table->string('mobile')->nullable();
            $table->integer('division_id')->nullable();
            $table->integer('department_id')->nullable();
            $table->integer('team_id')->nullable();
            $table->string('subteam')->nullable();
            $table->string('password');
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
