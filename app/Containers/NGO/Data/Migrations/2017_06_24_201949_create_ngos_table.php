<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNGOsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ngos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique()->nullable();
            $table->text('description')->nullable();
            $table->string('subject')->nullable();
            $table->text('province')->nullable();
            $table->text('city')->nullable();
            $table->text('address')->nullable();
            $table->date('registration_date')->nullable();
            $table->integer('registration_number')->unique()->nullable();
            $table->integer('national_number')->unique()->nullable();
            $table->integer('license_number')->unique()->nullable();
            $table->date('license_date')->nullable();
            $table->string('photo_path')->nullable();
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
        Schema::dropIfExists('ngos');
    }
}
