<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->char('Nombre_CC')->unique();
            $table->char('Latitud');
            $table->char('Longitud');
            $table->date('Fecha_inst');
            $table->char('Serie')->unique();
            $table->integer('D_p_M');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registros');
    }
};
