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
        Schema::create('paket', function (Blueprint $table) {
            $table->BigIncrements('id_paket');
            $table->unsignedBigInteger('id_meja');
            $table->string('nama_paket');
            $table->integer('harga_paket');
            $table->timestamps();

            $table->foreign('id_meja')->references('id_meja')->on('meja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paket');
    }
};
