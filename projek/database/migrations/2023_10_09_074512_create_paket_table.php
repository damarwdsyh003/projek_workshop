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
            $table->unsignedBigInteger('id_tipemeja');
            $table->string('nama_paket');
            $table->integer('harga_paket');
            $table->timestamps();

            $table->foreign('id_tipemeja')->references('id_tipemeja')->on('tipemeja');
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
