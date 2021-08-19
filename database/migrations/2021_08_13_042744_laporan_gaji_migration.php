<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaporanGajiMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_gajis', function (Blueprint $table) {
            $table->Increments('id_laporan_gaji');
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->string('bulan');
            $table->string('nominal');
            $table->string('status');
            
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
        Schema::dropIfExists('laporan_gajis');
    }
}
