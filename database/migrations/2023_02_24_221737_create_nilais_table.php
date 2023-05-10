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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kopi_id')->constrained('kopis')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('kriteria_id')->constrained('kriterias')->onUpdate('cascade')->onDelete('cascade');
            $table->float('jumlah_nilai');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
