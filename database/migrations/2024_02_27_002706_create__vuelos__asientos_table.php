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
        Schema::create('_vuelos__asientos', function (Blueprint $table) {
            $table->id('idTipoAsiento');
            $table->foreign('idTipoAsiento')->references('idTipoAsiento')->on('_tipo_asiento');
            $table->string('numeroVuelo', 5);
            $table->string('numeroAsiento', 5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_vuelos__asientos');
    }
};
