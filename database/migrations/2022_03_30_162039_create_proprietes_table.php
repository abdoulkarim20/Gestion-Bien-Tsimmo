<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proprietes', function (Blueprint $table) {
            $table->id();
            $table->string('libelle');
            $table->string('superficie');
            $table->integer('nombrePiece');
            $table->foreignId('quartier_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('deduction_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('agence_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('type_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->foreignId('proprietaire_id')->constrained()->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('proprietes');
    }
};
