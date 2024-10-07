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
        Schema::create('condominios', function (Blueprint $table) {
            $table->id('idMorador');
            $table->string('nomeMorador');
            $table->string('cpfMorador');
            $table->string('rgMorador');
            $table->string('aptoMorador');
            $table->string('telefoneMorador');
            $table->string('emailMorador');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condominios');
    }
};
