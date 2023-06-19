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
        Schema::create('produit_images', function (Blueprint $table) {
            $table->id();

            $table->foreignId('produit_id')->constrained();
            $table->integer('position')->defaults(1);
            $table->string('image');

            $table->timestamps();
                });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit_images');
    }
};
