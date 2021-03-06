<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class Categoria_TrabajosFakerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('es_ES');
        foreach (range(1, 20) as $index) {
            DB::table('categoria_trabajos')->insert([
                'nombre' => $faker->jobTitle,
            ]);
        }
    }
}
