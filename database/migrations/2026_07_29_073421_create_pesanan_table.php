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
        Schema::create('pesanan', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_nota', 10);
            $table->string('nama_pelanggan', 100);
            $table->string('nomor_hp', 15);
            $table->unsignedBigInteger('layanan_id');
            $table->float('jumlah');
            $table->float('berat_kg');
            $table->integer('total_harga');
            $table->string('status', 50)->default('Diterima');
            
            // Foreign key constraint
            $table->foreign('layanan_id')->references('id')->on('layanans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan');
    }
};
