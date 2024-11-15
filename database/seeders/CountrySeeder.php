<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['id' => 1, 'name' => 'Argentina', 'status' => 1],
            ['id' => 2, 'name' => 'Brasil', 'status' => 1],
            ['id' => 3, 'name' => 'Chile', 'status' => 1],
            ['id' => 4, 'name' => 'Colombia', 'status' => 1],
            ['id' => 5, 'name' => 'México', 'status' => 1],
            ['id' => 6, 'name' => 'Perú', 'status' => 1],
            ['id' => 7, 'name' => 'España', 'status' => 1],
            ['id' => 8, 'name' => 'Estados Unidos', 'status' => 1],
            ['id' => 9, 'name' => 'Canadá', 'status' => 1],
            ['id' => 10, 'name' => 'Uruguay', 'status' => 1]
        ];

        DB::table('countries')->insert($countries);
    }
}
