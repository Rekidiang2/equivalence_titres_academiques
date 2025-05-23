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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('demande_id')->constrained('demandes')->cascadeOnDelete();
            $table->string('num_dossier')->nullable();
            $table->enum('statut', ['Attente Traitement', 'Vérification authenticité', 'Attente signature arrêté', 'Prêt à retirer', 'Rejeté', 'Archivé'])->default('Attente Traitement');
            $table->text('grade_equivalenmt')->nullable();
            $table->string('observation')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
