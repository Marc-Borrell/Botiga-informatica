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
        Schema::create('principal', function (Blueprint $table) {
            $table->id('index');
            $table->string('nomCurs')->unique();
            $table->enum('tema',['PHP','Java','Python','C', 'Javascript']);
            $table->string('descripcio');
            $table->integer('durada_hores');
            $table->enum('nivell',['basic','intermedi','avancat']);
            $table->float('preu');
            $table->date('data_inici');
            $table->boolean('actiu');
            $table->enum('modalitat',['online','presencial','hibrid']);
            $table->integer('places_maximes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('principal');
    }
};
