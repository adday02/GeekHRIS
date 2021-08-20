<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKemampuanMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kemampuans', function (Blueprint $table) {
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
        Schema::table('kemampuans',function (Blueprint $table){
            $table->dropColumn(['username']);
            $table->dropColumn(['penilai']);
            $table->dropColumn(['tahun']);
            $table->dropColumn(['komunikatif']);
            $table->dropColumn(['tugas']);
            $table->dropColumn(['tekanan']);
            $table->dropColumn(['kemampuan_kerjaan']);
            $table->dropColumn(['bahasa']);
            $table->dropColumn(['kreatif']);
        });
    }
}
