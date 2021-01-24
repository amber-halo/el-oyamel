<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estados = fopen('public/estados.csv', 'r');

        if ($estados) {
            while (($linea = fgets($estados)) !== false) {
                #$chunks = str_replace('"', '', $linea);
                $chunks = preg_split("/,/", $linea);
                DB::table('estados')->insert([
                    'id' => $chunks[0],
                    'nombre' => $chunks[1],
                ]);
            }
            if (!feof($estados)) {
                echo "Error: fallo inesperado de fgets()\n";
            }
            fclose($estados);
        }

    }
}
