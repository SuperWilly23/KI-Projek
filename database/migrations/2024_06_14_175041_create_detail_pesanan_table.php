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
        Schema::create('detail_pesanan', function (Blueprint $table) {
            $table->unsignedBigInteger('ID_Barang');
            $table->unsignedBigInteger('ID_Pesanan')->nullable();
            $table->unsignedBigInteger('ID_Layanan')->nullable();
            $table->smallInteger('Banyak_Pesanan')->nullable();
            $table->timestamps();

            $table->foreign('ID_Barang')->references('ID_Barang')->on('barang');
            $table->foreign('ID_Pesanan')->references('ID_Pesanan')->on('pesanan');
            $table->foreign('ID_Layanan')->references('ID_Layanan')->on('layanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_pesanan');
    }
};
