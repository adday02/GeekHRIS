<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDisiplinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disiplins', function (Blueprint $table) {
            $table->Increments('id_disiplin');
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->string('penilai');
            $table->string('tahun');
            $table->string('semester');
            $table->string('kerja');
            $table->time('waktu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disiplins');
    }
}
