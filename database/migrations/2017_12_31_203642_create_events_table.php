<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('event_id');
            $table->string('event_name');
            $table->string('event_description');
            $table->string('event_time');
            $table->integer('event_location_id')->unsigned(); // needs to be foreign key of loc_id - locations table
            $table->integer('created_by_id')->unsigned(); //needs to be foreign key of user_id - users table
            $table->timestamps();

            $table->foreign('event_location_id')->references('loc_id')->on('locations');
            $table->foreign('created_by_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}


