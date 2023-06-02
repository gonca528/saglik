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
        Schema::create('randevus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('diyetisyen_id')->references('id')->on('diyetisyens')->onDelete('cascade');
            $table->text('ad');
            $table->text('telefon');
            $table->text('tarih');
            $table->text('konu');
            $table->text('doktor');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('randevus');
    }
};
