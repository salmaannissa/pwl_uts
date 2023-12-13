<?php

use App\Models\Alternatif;
use App\Models\Criteria;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cpi_evaluations', function (Blueprint $table) {
            $table->foreignIdFor(Alternatif::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Criteria::class)->constrained()->cascadeOnDelete();
            $table->float('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cpi_evaluations');
    }
};