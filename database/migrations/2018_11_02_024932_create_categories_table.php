<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->integer('house_id')->unsigned()->unsigned();
            $table->integer('apartment_id')->unsigned()->unsigned();
            $table->integer('estate_id')->unsigned()->unsigned();
            $table->foreign('apartment_id')->references('id')->on('apartments');
            $table->foreign('house_id')->references('id')->on('houses');
            $table->foreign('estate_id')->references('id')->on('companies');
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
        Schema::dropIfExists('categories');
    }
}
