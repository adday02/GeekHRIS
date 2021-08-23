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
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->string('penilai');
            $table->string('tahun');
            $table->string('semester');
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
