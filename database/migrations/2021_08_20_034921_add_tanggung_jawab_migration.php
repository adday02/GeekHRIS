<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTanggungJawabMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tanggung_jawabs', function (Blueprint $table) {
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->string('penilai');
            $table->string('tahun');
            $table->string('semester');
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
        Schema::table('tanggung_jawabs',function (Blueprint $table){
            $table->dropColumn(['username']);
            $table->dropColumn(['penilai']);
            $table->dropColumn(['tahun']);
            $table->dropColumn(['semester']);
            $table->dropColumn(['tepat_waktu']);
            $table->dropColumn(['kerahasiaan']);
            $table->dropColumn(['sarana']);
            $table->dropColumn(['kebersihan']);
            
        });
    }
}
