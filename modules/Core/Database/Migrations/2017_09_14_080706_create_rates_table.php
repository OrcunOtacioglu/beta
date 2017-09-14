<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('organizer_id')->unsigned();
            $table->foreign('organizer_id')->references('id')->on('organizers')->onDelete('cascade');

            $table->string('name');
            $table->integer('max_quantity')->nullable();
            $table->integer('type');
            $table->decimal('price');

            $table->text('description')->nullable();
            $table->integer('min_allowed_per_purchase')->default(2);
            $table->integer('max_allowed_per_purchase')->default(10);
            $table->dateTime('sales_start_time');
            $table->dateTime('sales_end_time');
            $table->integer('status')->default(0);
            $table->integer('availability')->default(0);

            $table->boolean('is_paused')->default(0);
            $table->boolean('absorb_fees')->default(0);

            $table->integer('ticket_delivery')->default(0);

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
        Schema::dropIfExists('rates');
    }
}
