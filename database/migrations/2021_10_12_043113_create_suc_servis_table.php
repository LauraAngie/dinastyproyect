<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSucServisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suc_servis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('serv_id')->unsigned();
            $table->foreign('serv_id')->references('id')->on('servicios');
            $table->unsignedBigInteger('suc_id')->unsigned();
            $table->foreign('suc_id')->references('id')->on('sucursales');
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
        Schema::dropIfExists('suc_servis');
    }
}
