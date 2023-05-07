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
        Schema::create('mercancias', function (Blueprint $table) {
            $table->id();
            $table->string('codigo', 6);
            $table->string('nombre', 105);
            $table->unsignedBigInteger('id_tipo_mercancia')->unique();
            //$table->primary('id_tipo_mercancia');
            $table->timestamps();

            $table->foreign('id_tipo_mercancia')
                ->references('id')
                ->on('tipo_mercancias')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mercancias');
    }
};
