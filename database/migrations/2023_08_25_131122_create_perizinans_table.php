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
        Schema::create('perizinans', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('nama');
            $table->string('nik',16);
            $table->string('kk',16);
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('jenis_surat');
            $table->string('keperluan_surat');
            $table->string('pesan');
            $table->string('jenis_pengambilan');
            $table->string('berkas_ktp');
            $table->string('berkas_kk');
            $table->string('berkas_lain')->nullable();
            $table->string('upload_surat')->nullable();
            $table->string('status_surat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinans');
    }
};
