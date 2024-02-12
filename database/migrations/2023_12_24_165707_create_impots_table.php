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
        Schema::create('impots', function (Blueprint $table) {
            $table->id();
            $table->String('login');
            $table->String('password');
            $table->foreignId('societe_id')->constrained('societes')->onDelete('cascade');
            $table->String('code_acce');

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
        Schema::dropIfExists('impots');
    }
};
