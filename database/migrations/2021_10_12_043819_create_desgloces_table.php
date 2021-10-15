<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesglocesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desgloces', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cita_id')->unsigned();
            $table->foreign('cita_id')->references('id')->on('citas');
            $table->unsignedBigInteger('serv_id')->unsigned();
            $table->foreign('serv_id')->references('id')->on('servicios');
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
        Schema::dropIfExists('desgloces');
    }
}
