<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identifier_name');
            $table->string('logo');
            $table->string('title');
            $table->string('landing'); // json with all the landing img text and CTA
            $table->string('bloc_tab'); //json with img and text
            $table->string('block_contact'); //json with img and text e-mail phone adress
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
        Schema::dropIfExists('pages');
    }
}
