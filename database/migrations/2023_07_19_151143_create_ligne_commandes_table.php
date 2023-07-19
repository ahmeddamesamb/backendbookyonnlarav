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
        Schema::create('ligne_commandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('commande_id')->constrained('commandes');
            $table->foreignId('produit_id')->constrained('produits');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligne_commandes');
    }
};
