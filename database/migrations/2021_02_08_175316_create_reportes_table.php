<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class  CreateReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reportes', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user_reportado');
            $table->unsignedBigInteger('id_user_reportador');
            $table->string('motivo');
            $table->timestamps();
            $table->foreign('id_user_reportado')->references('id')->on('users');
            $table->foreign('id_user_reportador')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reportes');
    }
}
