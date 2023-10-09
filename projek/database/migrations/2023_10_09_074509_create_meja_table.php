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
        Schema::create('meja', function (Blueprint $table) {
            $table->BigIncrements('id_meja');
            $table->unsignedBigInteger('id_tipemeja');
            $table->boolean('status_meja');
            $table->timestamps();

            $table->foreign('id_tipemeja')->references('id_tipemeja')->on('tipemeja');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meja');
    }
};
