<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test',
            'email' => 'test@example.com',
        ]);
        
        //Llamado a otros seeders
        $this->call([
            RoleSeeder::class,      //roles
            WorkRoleSeeder::class,  //roles de trabajo
            EmployeeSeeder::class,   //empleados
            CountrySeeder::class,    //  países
            CitySeeder::class,       //  ciudades
            ClientSeeder::class,     //  clientes
        ]);
    }
}
