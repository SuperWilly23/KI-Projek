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
            $table->id('ID_Pesanan');
            $table->date('Tanggal_Pesanan')->nullable();
            $table->date('Tanggal_Pengambilan')->nullable();
            $table->unsignedBigInteger('ID_Pelanggan')->nullable();
            $table->unsignedBigInteger('ID_User')->nullable();
            $table->string('Status_Pesanan')->nullable();
            $table->timestamps();
            $table->foreign('ID_User')->references('ID_User')->on('users');
            $table->foreign('ID_Pelanggan')->references('ID_Pelanggan')->on('pelanggan');
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
