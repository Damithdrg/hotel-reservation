<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('customer_id');
            // $table->unsignedBigInteger('banquest_hall_id');
            $table->foreignId('customer_id')->nullable()->constrained();
            $table->foreignId('banquest_hall_id')->nullable()->constrained();
            $table->dateTime('reservation_date');


            // $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            // $table->foreign('banquest_hall_id')->references('id')->on('banquest_halls')->onDelete('cascade');


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
        Schema::dropIfExists('reservations');
    }
};
