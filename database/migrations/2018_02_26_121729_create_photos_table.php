<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->increments('id_photos');
            $table->string('picture_name',100)->nullable();
            $table->date('picture_date')->nullable();
            $table->dateTime('publication_date')->nullable();
            $table->tinyInteger('priority')->nullable();
            $table->integer('spot_id')->unsigned();
            $table->foreign('spot_id')->references('id_spot')->on('spots');
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
        Schema::dropIfExists('photos');
    }
}