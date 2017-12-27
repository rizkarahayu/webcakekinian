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
        Schema::create('role_users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('role');
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('username');
            $table->string('alamat')->nullable();
            $table->string('no_telp')->nullable();
            $table->integer('role_id')->foreign('role_id')->references('id')
                ->on('role_users')->onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('customer', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->foreign('users_id')->references('id')
                ->on('users')->onDelete('cascade');
            $table->date('tgl_lahir')->nullable();
            $table->string('jklm')->nullable();
            $table->string('no_rek')->nullable();
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
        Schema::dropIfExists('role_users');
        Schema::dropIfExists('users');
        Schema::dropIfExists('customer');
    }
}
