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
        Schema::create('equipos', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            /**$table->id(); // Por defecto es autoincrementable, se puede cambiar.**/
            $table->string('nombre',50);
            $table->string('entrenador',50);
            $table->timestamps(); // agrega 2 campos, uno es fecha de creacion y la otra de modificacion.
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipos');
    }
};
