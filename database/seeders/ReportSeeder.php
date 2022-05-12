<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('report')->insert([
            [
                'id' => 1,
                'service' => 1,
                'status' => 0,
                'original' => 'Kiosk',             
            ],
            [
                'id' => 2,
                'service' => 2,
                'status' => 0,
                'original' => 'Kiosk',

            ],
            [
                'id' => 3,
                'service' => 1,
                'status' => 0,
                'original' => 'Hệ thống',
            ]
        ]);
    }
}
