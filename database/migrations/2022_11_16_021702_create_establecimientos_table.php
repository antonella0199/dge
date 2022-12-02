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
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipoEst_id');
            $table->unsignedBigInteger('barrio_id');
            $table->text('nombre');
            $table->integer('numero');
            $table->text('direccion');
            $table->text('horarios');
            $table->text('telefono');
            $table->text('descripcion');
            $table->timestamps();

            $table->foreign('tipoEst_id')->references('id')->on('tipo_ests');
            $table->foreign('barrio_id')->references('id')->on('barrios');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('establecimientos');
    }
};
