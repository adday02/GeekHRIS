<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TotalgajiMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totalgajis', function (Blueprint $table) {
            $table->Increments('id_totalgaji');
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->string('bulan');
            $table->string('jabatan');
            $table->string('nominal');
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
        Schema::dropIfExists('totalgajis');
    }
}
