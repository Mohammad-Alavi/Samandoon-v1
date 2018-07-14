<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateKycPhotosTable extends Migration
{

    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kyc_photos', function (Blueprint $table) {

            $table->increments('id');
            $table->string('file_name');
            $table->string('label');
            $table->string('status');
            $table->string('text')->nullable();
            $table->integer('ngo_id');
            $table->integer('admin_id')->nullable();
            $table->timestamps();
            //$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::drop('kyc_photos');
    }
}
