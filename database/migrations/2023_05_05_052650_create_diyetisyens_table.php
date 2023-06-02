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
        Schema::create('diyetisyens', function (Blueprint $table) {
            $table->id();
            $table->string('ad');
            $table->text('ünvan');
            $table->text('üniversite');
            $table->text('şehir');
            $table->text('diller');
            $table->text('bilgi');
            $table->string('thumbnail')->nullable();
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diyetisyens');
    }
};
