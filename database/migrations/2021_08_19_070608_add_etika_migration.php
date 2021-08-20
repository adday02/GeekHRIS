<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEtikaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('etikas', function (Blueprint $table) {
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
        Schema::table('etikas',function (Blueprint $table){
            $table->dropColumn(['username']);
            $table->dropColumn(['penilai']);
            $table->dropColumn(['tahun']);
            $table->dropColumn(['semester']);
            $table->dropColumn(['sikap_tuturkata']);
            $table->dropColumn(['jujur_tanggungjawab']);
            $table->dropColumn(['pakaian_rapi']);
            
        });
    }
}
