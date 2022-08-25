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
        Schema::create('banquest_halls_menu', function (Blueprint $table) {
            // $table->id();
            // $table->timestamps();
            // $table->unsignedInteger('banquest_hall_id');
            // $table->unsignedInteger('menu_id');

            $table->foreignId('banquest_hall_id')->constrained();
            $table->foreignId('menu_id')->constrained();
            
            // $table->foreign('banquest_hall_id')->references('id')->on('banquest_halls')->onDelete('cascade');
            // $table->foreign('menu_id')->references('id')->on('menus')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banquest_halls_menu');
    }
};
