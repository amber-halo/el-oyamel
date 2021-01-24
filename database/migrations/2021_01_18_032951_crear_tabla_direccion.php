<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaDireccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direcciones', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('calle_dir')->nullable();
            $table->set('tipo_via', ['Andador', 'Avenida', 'Boulevard', 'Calle', 'Callejón', 'Calzada', 'Cerrada', 'Circuito',
               'Continuación', 'Periferico', 'Privada', 'Prolongación', 'Retorno', 'Ninguna']);
            $table->smallInteger('nume_dir');
            $table->string('entre_calles')->nullable();
            $table->set('orient_dir', ['Norte', 'Sur', 'Poniente', 'Oriente', 'Ninguno']);
            $table->string('referen_dir')->nullable();
            $table->foreignId('colonia_id')->constrained('colonias')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direcciones');
    }
}
