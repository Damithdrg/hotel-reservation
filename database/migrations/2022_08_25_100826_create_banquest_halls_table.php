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
        Schema::create('banquest_halls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location')->unique();
            $table->integer('max_no_of_guest');
            $table->dateTime('reservation_date');
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
        Schema::dropIfExists('banquest_halls');
    }
};
