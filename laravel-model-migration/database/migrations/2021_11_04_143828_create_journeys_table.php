<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJourneysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Journeys', function (Blueprint $table) {
            $table->id();
            $table->string('country',50);               
            $table->string('region',50);
            $table->string('city',100);
            $table->string('location',100);
            $table->date('date_start');
            $table->tinyInteger('duration')->unsigned();    // days  
            $table->string('placement',255);
            $table->string('service',255);
            $table->text('info');
            $table->text('description');
            $table->boolean('available');
            $table->float('price',8,2,true);

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
        Schema::dropIfExists('Journeys');
    }
}
