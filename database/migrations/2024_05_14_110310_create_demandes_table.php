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
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('Adresse')->nullable();
            $table->string('identite_file')->nullable();
            $table->string('visa_file')->nullable();
            // Etablissement
            $table->string('nom_origine')->nullable();
            $table->string('nom_fr')->nullable();
            $table->string('secteur')->nullable();
            $table->date('annee_creation')->nullable();
            $table->string('pays')->nullable();
            $table->string('province_ville')->nullable();
            $table->string('siteweb')->nullable();
            $table->string('etab_email1')->nullable();
            $table->string('etab_email2')->nullable();
            $table->string('etab_phone1')->nullable();
            $table->string('etab_phone2')->nullable();
            // Cursus
            $table->string('grade')->nullable();
            $table->string('option')->nullable();
            $table->string('num_diplome')->nullable();
            $table->date('date_delivrance')->nullable();
            $table->date('date_debut_cursus')->nullable();
            $table->date('date_fin_cursus')->nullable();
            $table->string('diplome_file')->nullable();
            $table->string('releve_file')->nullable();
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
