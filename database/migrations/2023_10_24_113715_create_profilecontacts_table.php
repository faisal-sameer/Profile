<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilecontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profilecontacts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            //<---------- FK from User tables ------------>//
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('Specialty')->nullable();
            $table->integer('phone')->nullable();
            $table->string('Linkdin');
            $table->string('Github');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profilecontacts');
    }
}
