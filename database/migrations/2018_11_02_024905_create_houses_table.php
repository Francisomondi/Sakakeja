<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('houses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned()->unsigned();
            $table->integer('estate_id')->unsigned()->unsigned();
            $table->integer('apartment_id')->unsigned()->unsigned();
            $table->foreign('estate_id')->references('id')->on('estates');
            $table->foreign('company_id')->references('id')->on('companies');
            $table->foreign('apartment_id')->references('id')->on('apartments');
            
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
        Schema::dropIfExists('houses');
    }
}
