<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKerjamaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('kerjasamas', function (Blueprint $table) {
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->string('penilai');
            $table->string('tahun');
            $table->string('semester');
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
        Schema::table('kerjasamas',function (Blueprint $table){
            $table->dropColumn(['username']);
            $table->dropColumn(['penilai']);
            $table->dropColumn(['tahun']);
            $table->dropColumn(['semester']);
            $table->dropColumn(['menisi_partner']);
            $table->dropColumn(['koordinasi']);
            $table->dropColumn(['empati']);
            
        });
    }

}
