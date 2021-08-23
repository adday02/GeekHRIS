<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKemampuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kemampuans', function (Blueprint $table) {
            $table->Increments('id_kemampuan');
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->string('penilai');
            $table->string('tahun');
            $table->string('komunikatif');
            $table->string('tugas');
            $table->string('tekanan');
            $table->string('kemampuan_kerjaan');
            $table->string('bahasa');
            $table->string('kreatif');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kemampuans');
    }
}
