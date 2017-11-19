<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShoppingDetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_stock', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stock_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('shopping_stock', function($table) {
            $table->foreign('stock_id')->references('id')->on('shopping');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('shopping_stock');
    }
}