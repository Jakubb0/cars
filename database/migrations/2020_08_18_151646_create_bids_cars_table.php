<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids_cars', function (Blueprint $table) {
            $table->id();
            $table->integer("bid_id")->unsigned()->constrained("bids");
            $table->integer("car_id")->unsigned()->constrained("cars");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bids_cars');
    }
}
