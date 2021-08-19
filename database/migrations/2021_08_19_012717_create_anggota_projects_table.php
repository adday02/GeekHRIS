<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnggotaProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anggota_projects', function (Blueprint $table) {
            $table->Increments('id_angproj');
            $table->string('username')->index();
            $table->foreign('username')->references('username')->on('users');
            $table->integer('id_project')->unsigned();
            $table->foreign('id_project')->references('id_project')->on('projects');
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
        Schema::dropIfExists('anggota_projects');
    }
}
