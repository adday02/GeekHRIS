<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanggungJawabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanggung_jawabs', function (Blueprint $table) {
            $table->Increments('id_tanggung_jawab');
            $table->integer('id_performance')->unsigned();
            $table->foreign('id_performance')->references('id_performance')->on('performances');
            $table->string('penilain');
            $table->string('dinilai');
            $table->string('tepat_waktu');
            $table->string('kerahasiaan');
            $table->string('sarana');
            $table->string('kebersihan');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggung_jawabs');
    }
}
