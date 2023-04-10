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
        Schema::create('dokter', function (Blueprint $table) {
            $table->id();
            $table->string('kode_dokter', 10)->unique();
            $table->string('nama_dokter', 50)->nullable();
            $table->string('spesialis', 50)->nullable();
            $table->string('hp', 13)->nullable();
            $table->string('alamat')->nullable();
            $table->string('jk', 1)->nullable();
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
        Schema::dropIfExists('dokters');
    }
};
