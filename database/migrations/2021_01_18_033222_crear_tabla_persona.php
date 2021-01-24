<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('personas');
        Schema::create('personas', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('nom_per');
            $table->string('ap_per');
            $table->string('am_per');
            $table->string('nom_comp')->virtualAs("concat('nom_per',_utf8mb4' ','ap_per',_utf8mb4' ','am_per')");
            $table->string('genero_per');
            $table->date('gnac_per');
            $table->set('edocivil_per', ['Casado', 'Soltero', 'Separado', 'Divorciado', 'Viudo']);
            $table->string('curp')->unique();
            $table->json('contacto');
            $table->unsignedBigInteger('direccion_id');
            $table->foreign('direccion_id')->references('id')->on('direcciones')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personas', function (Blueprint $table) {
            //
        });
    }
}
