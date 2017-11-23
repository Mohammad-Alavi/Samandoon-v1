<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');

            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('confirmed')->default(false);
            $table->boolean('is_client')->default(false);

            $table->string('gender')->nullable();
            $table->string('birth')->nullable();

            $table->string('province')->nullable();
            $table->string('city')->nullable();

            $table->integer('ngo_id')->nullable();

            $table->string('social_provider')->nullable();
            $table->string('social_nickname')->nullable();
            $table->string('social_id')->nullable();
            $table->longText('social_token')->nullable();
            $table->longText('social_token_secret')->nullable();
            $table->longText('social_refresh_token')->nullable();
            $table->string('social_expires_in')->nullable();
            $table->string('social_avatar')->nullable();
            $table->string('social_avatar_original')->nullable();

            $table->string('device')->nullable();
            $table->string('platform')->nullable();

            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('users');
    }
}
