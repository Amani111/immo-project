<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('image')->nullable();
            $table->float('prix');
            $table->integer('user_id');
            $table->unsignedBigInteger('showroom_id')->unsigned();
            $table->unsignedBigInteger('category_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('products', function($table) {
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');;
        });
        Schema::table('products', function($table) {
            $table->foreign('showroom_id')->references('id')->on('showrooms')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
