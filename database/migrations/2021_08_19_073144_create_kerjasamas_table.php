<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKerjasamasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kerjasamas', function (Blueprint $table) {
            $table->Increments('id_kerjasama');
            $table->integer('id_performance')->unsigned();
            $table->foreign('id_performance')->references('id_performance')->on('performances');
            $table->string('penilain');
            $table->string('dinilai');
            $table->string('menisi_partner');
            $table->string('koordinasi');
            $table->string('empati');        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kerjasamas');
    }
}
