<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //DB::table('estado')->insert([
        //    'nombre' => 'Guanajuato',
        //]);
        $this->call([
            EstadoSeeder::class,
            CiudadSeeder::class,
        ]);
    }
}
