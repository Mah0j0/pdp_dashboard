<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Marketing',
                'status' => 1
            ],
            [
                'id' => 2,
                'name' => 'Recepción',
                'status' => 1
            ],
            [
                'id' => 3,
                'name' => 'Contabilidad',
                'status' => 1
            ],
            [
                'id' => 4,
                'name' => 'Administración',
                'status' => 1
            ]
        ];
 
        DB::table('work_roles')->insert($roles);
    }
}
