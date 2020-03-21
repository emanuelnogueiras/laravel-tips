<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Instancia de Faker
        $faker = Faker::create();

        // Creamos 100 usuarios
        foreach( range(1, 100) as $i )
        {
            \App\User::create([
                "name" => $faker->name,
                "email" => $faker->email,
                "password" => bcrypt('1234')
            ]);
        }        
    }
}
