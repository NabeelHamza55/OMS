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
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->biginteger('lvl');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('status')->default(true);
            $table->biginteger('usertype_id')->unsigned()->default(2);
            $table->biginteger('role_id')->unsigned()->default(2);
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('usertype_id')->references('id')->on('usertypes')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');

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
