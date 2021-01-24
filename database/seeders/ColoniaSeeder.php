<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ColoniaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::disableQueryLog();
        $colonias = fopen("public/colonias.csv", "r");

        if ($colonias) {
            while (($chunks = fgetcsv($colonias, 50, ":")) !== false) {
                #$chunks = preg_split("/:/", $colonia);
                $row = [
                    'id' => '"'.$chunks[0].'"',
                    #'nombre' => str_replace('"', "", $chunks[1]),
                    'nombre' => '"'.$chunks[1].'"',
                    'asentamiento' => '"'.$chunks[2].'"',
                    'zona' => '"'.$chunks[3].'"',
                    'cp' => '"'.$chunks[4].'"',
                    'ciudad_id' => '"'.$chunks[5].'"',
                ];
                $columnas = array_keys($row);

                $query = 'INSERT INTO colonia ('.implode(',', $columnas).') VALUES ('.implode(',', $row).')';
                DB::statement($query);
            }
            if (!feof($colonias)) {
                echo "Hubo un problema con el archivo bro";
            }
            fclose($colonias);
        }
    }
}
