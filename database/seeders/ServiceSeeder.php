<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('service')->insert([
            [
                'id' => '1',
                'name' => 'Kiosk',
                'description' => 'Mô tả dịch vụ 1',
                'status' => 0,
                
                
            ],
            [
                'id' => '2',
                'name' => 'Kiosk2',
                'description' => 'Mô tả dịch vụ 2',
                'status' => 0,
            ],
            [
                'id' => '3',
                'name' => 'Kiosk3',
                'description' => 'Mô tả dịch vụ 3',
                'status' => 0,
            ]
        ]);
    }
}
