<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLocationsTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {

            $table->increments('id');
            $table->string('name');
            $table->string('globalCode')->nullable();
            $table->integer('lft')->nullable()->default(null);
            $table->integer('rgt')->nullable()->default(null);
            $table->integer('lvl')->nullable()->default(null);
            $table->integer('parent')->nullable()->default(null);
            $table->tinyInteger('published')->default(null);

            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('locations');
    }
}
