<?php

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
        Schema::create('anggaran_pendapatan', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->string('detail_jenis_anggaran');
            $table->integer('nilai_anggaran');
            $table->integer('nilai_realisasi');
            $table->string('rincian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggaran_pendapatan');
    }
};
