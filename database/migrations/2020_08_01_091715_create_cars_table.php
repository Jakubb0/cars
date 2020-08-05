<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('brand');
            $table->year('year');
            $table->unsignedInteger('power');
            $table->unsignedInteger('litre');
            $table->boolean('automatic');
            $table->unsignedInteger('price');
            $table->unsignedInteger('buynow_price');
            $table->longtext('description');
            $table->foreignId('owner')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
}
