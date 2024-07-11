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
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            // Identite
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->string('nom')->nullable();
            $table->string('postnom')->nullable();
            $table->string('prenom')->nullable();
            $table->string('genre')->nullable();
            $table->string('lieu_naissance')->nullable();
            $table->string('date_naissance')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('photo')->nullable();
            $table->string('type_identite')->nullable();
            $table->string('numero_identite')->nullable();
            $table->string('email_requerant')->nullable();
            $table->string('phone_requerant')->nullable();
            $table->text('Adresse_requerant')->nullable();
            $table->string('piece_identite_copy')->nullable();
            $table->string('preuve_sejour_copy')->nullable();
            $table->string('lettre_demande_copy')->nullable();
            // Etablissement
            $table->string('nom_univ_origine')->nullable();
            $table->string('nom_univ_fr')->nullable();
            $table->string('secteur_univ')->nullable();
            $table->date('date_creation')->nullable();
            $table->string('pays_etude')->nullable();
            $table->string('province_ville_etude')->nullable();
            $table->string('siteweb_univ')->nullable();
            $table->string('email_univ')->nullable();
            $table->string('phone_univ')->nullable();
            // Cursus
            $table->string('grade')->nullable();
            $table->string('option')->nullable();
            $table->string('num_diplome')->nullable();
            $table->date('date_diplome')->nullable();
            $table->date('date_debut_cursus')->nullable();
            $table->date('date_fin_cursus')->nullable();
            $table->string('mode_enseignement')->nullable();
            $table->string('diplome_base_copy')->nullable();
            $table->string('diplome_univ_copy')->nullable();
            $table->string('releve_cote_copy')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
