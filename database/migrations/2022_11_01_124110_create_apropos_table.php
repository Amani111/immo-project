<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAproposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apropos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titre1')->nullable();
            $table->string('titre2')->nullable();
            $table->string('titre3')->nullable();
            $table->string('titre4')->nullable();
            $table->string('titre5')->nullable();

            $table->text('description1')->nullable();
            $table->text('description2')->nullable();
            $table->text('description3')->nullable();
            $table->text('description4')->nullable();
            $table->text('description5')->nullable();

            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
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
        Schema::dropIfExists('apropos');
    }
}
