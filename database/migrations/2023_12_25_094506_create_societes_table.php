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
        Schema::create('societes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('formes_juridique');
            $table->string('siege_social');
            $table->string('capital');
            $table->string('activite_principal');
            $table->string('rc');
            $table->string('patente');
             $table->string('if');
             $table->string('cnss');
             $table->string('ice');
             $table->string('rib');
             $table->date('date_exploitation');
             $table->date('date_debut_exploitation');

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
        Schema::dropIfExists('societes');
    }
};
