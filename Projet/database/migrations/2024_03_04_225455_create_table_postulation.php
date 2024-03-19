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
        Schema::create('postulation', function (Blueprint $table) {
            $table->unsignedBigInteger('idCandidat')->nullable(false);
            $table->foreign('idCandidat')->references('idCandidat')->on('Candidat')->onDelete('cascade');

            $table->unsignedBigInteger('idAnnonce')->nullable(false);
            $table->foreign('idAnnonce')->references('idAnnonce')->on('Annonce')->onDelete('cascade');

            $table->string('Nom');
            $table->string('Email');
            $table->string('Website');
            $table->string('CV');
            $table->string('LettreMotivation');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulation');
    }
};
