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
            $table->id();
            $table->engine = 'InnoDB';
            $table->unsignedBigInteger('tour_id');
            $table->string('name');
            $table->string('description');
            $table->string('Destination');
            $table->date('Arrival date');
            $table->date('Leave date');
            $table->decimal('Price');
            $table->decimal('Discount')->nullable();
            $table->string('Image_path');
            $table->integer('Bookings')->default(0);
            $table->unsignedTinyInteger('rating')->default(0);
            $table->timestamps();
            $table->foreign('tour_id')->references('id')->on('tours')->onDelete('cascade');

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
