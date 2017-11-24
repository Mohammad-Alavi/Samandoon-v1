<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNGOSubjectTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ngo_subject', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('ngo_id');
            $table->integer('subject_id');
            $table->timestamps();
            //$table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('ngo_subject');
    }
}
