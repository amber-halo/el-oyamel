<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CiudadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ciudades = fopen("public/ciudades.csv", "r");
        if ($ciudades) {
            while (($linea = fgets($ciudades)) !== false) {
                #$chunks = str_replace('"', '', $linea);
                $chunks = preg_split("/,/", $linea);
                DB::table('ciudades')->insert([
                    'id' => $chunks[0],
                    'nombre' => $chunks[1],
                    'estado_id' => $chunks[3],
                ]);
            }
            if (!feof($ciudades)) {
                echo "Error: fallo inesperado de fgets()\n";
            }
            fclose($ciudades);
        }
    }
}
