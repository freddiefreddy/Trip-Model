<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('status');
            $table->string('request_date');
            $table->string('pickup_lat');
            $table->string('pickup_lng');
            $table->string('pickup_location');
            $table->string('dropoff_lat');
            $table->string('dropoff_lng');
            $table->string('dropoff_location');
            $table->string('pickup_date');
            $table->string('dropoff_date');
            $table->string('type');
            $table->string('driver_id');
            $table->string('driver_name');
            $table->string('driver_rating');
            $table->string('driver_pic');
            $table->string('car_make');
            $table->string('car_model');
            $table->string('car_numer');
            $table->string('car_year');
            $table->string('car_pic');
            $table->string('duration');
            $table->string('duration_unit');
            $table->string('distance');
            $table->string('distance_unit');
            $table->string('cost');
            $table->string('cost_unit');
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
        Schema::dropIfExists('trips');
    }
}
