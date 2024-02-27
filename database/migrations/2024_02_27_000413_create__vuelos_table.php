<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('_vuelos', function (Blueprint $table) {
            $table->string('numeroVuelo', 5)->primarykey();
            $table->string('origen', 10)->notnull();
            $table->string('destino', 10)->notnull();
            $table->integer('numeroAsientos')->notnull();
            $table->timestamp('fecha de vuelo');
            $table->timestamps();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('_vuelos');
    }
};
