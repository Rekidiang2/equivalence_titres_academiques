<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('demande_id')->constrained('demandes')->cascadeOnDelete();
            $table->decimal('montant_cdf', 10, 2);
            $table->decimal('montant_usd', 10, 2);
            $table->string('numero_note')->nullable();
            $table->date('date_taxation')->nullable();
            $table->string('copie_note')->nullable();

            $table->string('numero_bordereau')->nullable();
            $table->date('date_bordereau')->nullable();
            $table->string('copie_bordereau')->nullable();
            $table->boolean('deja_paye');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payements');
    }
};
