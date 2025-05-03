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
        Schema::create('profressoresseriesturmas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('idProfessorFK')->unsigned();
            $table->foreign('idProfessorFK')->references('id')->on('professores');
            $table->integer('idSerieFK')->unsigned();
            $table->foreign('idSerieFK')->references('id')->on('series');
            $table->integer('idTurmaFK')->unsigned();
            $table->foreign('idTurmaFK')->references('id')->on('turmas');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profressoresseriesturmas');
    }
};
