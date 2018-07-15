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
            $table->string('public_name')->unique();
            $table->text('description')->nullable();
            $table->string('area_of_activity')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->text('address')->nullable();
            $table->string('status')->nullable();
            $table->string('verification_status')->default(config('samandoon.ngo_verification_status.unverified'));
            $table->string('verification_admin_id')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('type')->nullable();
            $table->integer('user_id');
            $table->string('national_number')->unique()->nullable();
            $table->string('registration_number')->nullable();
            $table->string('registration_date')->nullable();
            $table->string('registration_unit')->nullable();
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
