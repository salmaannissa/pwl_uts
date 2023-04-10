<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pasien', 10)->unique();
            $table->string('nama_pasien', 50)->nullable();
            $table->string('jk', 1)->nullable();
            $table->string('poli', 50)->nullable();
            $table->string('kode_dokter', 10)->nullable();
            $table->string('keluhan', 255)->nullable();
            $table->string('diagnosa', 255)->nullable();
            $table->string('nama_wali', 50)->nullable();
            $table->string('hp_wali', 13)->nullable();
            $table->string('alamat', 100)->nullable();
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
        Schema::dropIfExists('pasiens');
    }
};
