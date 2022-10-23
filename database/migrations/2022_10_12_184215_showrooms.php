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
            $table->id();
            $table->string('name'); 
            $table->integer('user_id'); 
            $table->string('address');
            $table->string('telephone');
            $table->string('vedio')->nullable();
            $table->string('description');
            $table->double('lat')->nullable();
            $table->double('lng')->nullable();
            $table->string('code_postal');
            $table->unsignedBigInteger('govliste_id')->unsigned()->index()->nullable();
            $table->foreign('govliste_id')->references('id')->on('govlistes');
            $table->timestamps();
             $table->softDeletes();
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
