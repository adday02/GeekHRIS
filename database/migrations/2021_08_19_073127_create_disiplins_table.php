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
            $table->integer('id_performance')->unsigned();
            $table->foreign('id_performance')->references('id_performance')->on('performances');
            $table->string('penilain');
            $table->string('dinilai');
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
