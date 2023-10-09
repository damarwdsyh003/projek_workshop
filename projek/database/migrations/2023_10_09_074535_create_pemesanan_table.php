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
        Schema::create('pemesanan', function (Blueprint $table) {
            $table->BigIncrements('id_pemesanan');
            $table->unsignedBigInteger('id_users');
            $table->unsignedBigInteger('id_meja');
            $table->unsignedBigInteger('id_paket');
            $table->date('tgl_pemesanan');
            $table->timestamps();

            $table->foreign('id_users')->references('id_users')->on('users');
            $table->foreign('id_meja')->references('id_meja')->on('meja');
            $table->foreign('id_paket')->references('id_paket')->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan');
    }
};
