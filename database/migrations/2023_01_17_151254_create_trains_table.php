<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 100);
            $table->string('departure_station', 200)->default('1');
            $table->string('station_of_arrival', 200);
            $table->date('departure_time');
            $table->date('arrival_time');
            $table->bigInteger('train_code')->default('0000');
            $table->bigInteger('number_of_coaches')->default('8');
            $table->boolean('in_time', 10)->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.$
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
