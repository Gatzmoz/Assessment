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
        Schema::create('results', function (Blueprint $table) {
            $table->id('result_id');
            $table->foreignId('user_id');
            $table->date('tanggal_kuis');
            $table->integer('sifat1_score')->default(0);
            $table->integer('sifat2_score')->default(0);
            $table->integer('sifat3_score')->default(0);
            $table->integer('sifat4_score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
