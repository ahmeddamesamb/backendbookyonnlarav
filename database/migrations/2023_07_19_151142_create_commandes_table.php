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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('etatCommande');
            $table->string('numeroCommande');
            $table->string('statutCommande');
            $table->integer('paiement');
            $table->foreignId('user_id')->constrained('users');
            $table->foreignId('zone_id')->constrained('zones');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
