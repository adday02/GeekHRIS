<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtikasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etikas', function (Blueprint $table) {
            $table->Increments('id_etika');
            $table->integer('id_performance')->unsigned();
            $table->foreign('id_performance')->references('id_performance')->on('performances');
            $table->string('penilain');
            $table->string('dinilai');
            $table->string('sikap_tuturkata');
            $table->string('jujur_tanggungjawab');
            $table->string('pakaian_rapi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etikas');
    }
}
