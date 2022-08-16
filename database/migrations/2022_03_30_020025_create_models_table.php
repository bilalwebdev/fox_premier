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
        Schema::create('models', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('image')->nullable();
            $table->longText('description')->nullable();
            $table->longText('video')->nullable();
            $table->longText('virtual_tour')->nullable();
            $table->string('living_area')->nullable();
            $table->string('bed')->nullable();
            $table->string('total_area')->nullable();
            $table->string('bath_full')->nullable();
            $table->string('bath_half')->nullable();
            $table->longText('map')->nullable();
            $table->string('garage')->nullable();
            $table->string('status')->nullable();
            $table->string('type')->nullable();
            $table->string('price')->nullable();
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
        Schema::dropIfExists('models');
    }
};
