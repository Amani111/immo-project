<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Showrooms extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('showrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->integer('user_id'); 
            $table->string('address');
            $table->string('telephone');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('video')->nullable();
            $table->string('image')->nullable();
            $table->text('description');
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('code_postal');
            $table->integer('govliste_id')->unsigned();
            $table->timestamps();
             $table->softDeletes();
        });
        Schema::table('showrooms', function($table) {
            $table->foreign('govliste_id')->references('id')->on('govlistes')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
