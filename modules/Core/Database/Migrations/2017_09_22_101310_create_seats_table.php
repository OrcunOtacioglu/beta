<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('venue_id')->unsigned();
            $table->foreign('venue_id')->references('id')->on('venues')->onDelete('cascade');

            $table->integer('rate_id')->unsigned();
            $table->foreign('rate_id')->references('id')->on('rates')->onDelete('cascade');

            $table->integer('order_id')->unsigned()->nullable();
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');

            $table->string('uuid');

            $table->string('zone');
            $table->string('row');
            $table->integer('number');

            $table->string('status');

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
        Schema::dropIfExists('seats');
    }
}
