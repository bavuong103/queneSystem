<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role')->insert([
            [
                'id' => 1,
                'name' => 'Kế toán',
                'number' => 6,
                'description' => 'mô tả A',             
            ],
            [
                'id' => 2,
                'name' => 'Bác sĩ',
                'number' => 6,
                'description' => 'mô tả B',  

            ],
            [
                'id' => 3,
                'name' => 'Lễ tân',
                'number' => 6,
                'description' => 'mô tả C',  
            ]
        ]);
    }
}
