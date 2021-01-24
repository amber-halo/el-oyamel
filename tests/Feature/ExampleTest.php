<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Estado;
use App\Models\Ciudad;
use App\Models\Colonia;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        #foreach (Estado::all() as $estados) {
        #    echo $estados->nombre, PHP_EOL;
        #}

        echo Estado::find(1)->ciudades, PHP_EOL;
        echo "-----------------------------------------------------------------", PHP_EOL;
        echo Ciudad::find(1)->estado, PHP_EOL;
        echo "-----------------------------------------------------------------", PHP_EOL;
        echo \App\Models\Colonia::find(1)->ciudad, PHP_EOL;
        echo __NAMESPACE__;

        #$archivo = fopen('public/colonias.csv', 'r');

        /*if ($archivo) {

            for ($i = 0; $i < 10; $i++) {

                $linea = fgets($archivo);
                $linea = str_replace('"', "", $linea);
                $chunks = preg_split("/,/", $linea);
                foreach ($chunks as $chunk) {
                    #echo str_replace('"', "", $chunk), " ";
                    echo $chunk, " ";
                }
            }
            fclose($archivo);
        }
         */
    }
}
