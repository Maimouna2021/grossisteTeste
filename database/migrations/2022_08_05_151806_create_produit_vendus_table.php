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
        Schema::create('produit_vendus', function (Blueprint $table) {
            $table->id();
            $table->integer('quantite');
            
            $table->foreignId('produit_id')
               ->constrained()
               ->onUpdate('cascade')
               ->onDelete('cascade');

               $table->foreignId('client_id')
               ->constrained()
               ->onUpdate('cascade')
               ->onDelete('cascade');

               $table->foreignId('facture_id')
               ->constrained()
               ->onUpdate('cascade')
               ->onDelete('cascade');
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
        Schema::dropIfExists('produit_vendus');
    }
};
