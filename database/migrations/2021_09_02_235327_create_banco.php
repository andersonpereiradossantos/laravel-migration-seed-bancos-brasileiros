<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanco extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banco', function (Blueprint $table) {
            $table->id();
            $table->string('codigo')->nullable();
            $table->string('nome');
            $table->string('site')->nullable();
            $table->timestamp();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('banco');
    }
}


DB::table('cidade')->insert([
    'codigo_uf' => 11,
    'codigo_municipio' => 15,
    'nome' => 'Alta Floresta D\'Oeste'
]);