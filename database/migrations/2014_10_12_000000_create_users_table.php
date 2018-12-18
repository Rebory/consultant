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
            $table->string('name');
            $table->string('category')->default('Immigration Consultant');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('vkey')->nullable();
            $table->enum('active', ['Y', 'N'])->default('N');
            $table->string('mobile')->unique()->nullable();
            $table->string('upic')->nullable();
            $table->string('landline')->nullable();
            $table->string('address')->nullable();
            $table->mediumText('description')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->default('Punjab');
            $table->string('country')->default('India');
            $table->string('website')->nullable();
            $table->mediumText('map')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
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
