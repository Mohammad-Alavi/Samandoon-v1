<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgosTable extends Migration
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
            $table->string('area_of_activity')->nullable();
            $table->text('address')->nullable();
            $table->date('registration_date')->nullable();
            $table->date('license_date')->nullable();
            $table->integer('registration_number')->unique()->nullable();
            $table->integer('national_number')->unique()->nullable();
            $table->integer('license_number')->unique()->nullable();
            $table->string('logo_photo_path')->nullable();
            $table->string('banner_photo_path')->nullable();
            $table->integer('user_id');
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
