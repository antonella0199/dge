
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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('barrio_id');
            $table->string('asunto')->unique();
            $table->text('descripcion');
            $table->string('imagen_url');
            $table->date('fechaIni');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('reportes');
    }
};

  

