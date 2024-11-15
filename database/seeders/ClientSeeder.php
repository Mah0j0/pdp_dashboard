<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('es_ES');
        
        // Lista de posibles solicitudes especiales
        $specialRequests = [
            'Habitación con vista al mar',
            'Cama extra',
            'Servicio de despertador',
            'Almohadas hipoalergénicas',
            'Habitación para no fumadores',
            'Cerca del ascensor',
            'Piso alto',
            'Habitación tranquila',
            null,
            null  // Algunos clientes sin solicitudes especiales
        ];

        // Crear 20 clientes
        for ($i = 0; $i < 20; $i++) {
            $name = $faker->firstName();
            $lastname = $faker->lastName();
            
            DB::table('clients')->insert([
                'name' => $name,
                'lastname' => $lastname,
                'email' => strtolower($name) . '.' . strtolower($lastname) . '@' . $faker->freeEmailDomain,
                'document' => $faker->numberBetween(10000000, 99999999),
                'phone_number' => $faker->numberBetween(900000000, 999999999),
                'special_requests' => $faker->randomElement($specialRequests),
                'status' => 1,
                'country_id' => $faker->numberBetween(1, 10) // Usando los IDs de países que creamos
            ]);
        }
    }
}
