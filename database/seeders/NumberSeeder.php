<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('number')->insert([
            [
                'id' => 1,
                'fullname' => 'Dương Quang Huy',
                'service' => 1,
                'dateUsed' => '2022-05-06',
                'status' => 1,
                'original' => 'Kiosk',
                'phone' => '44654646546',
                'email' => 'huy@gmail.com',
                
            ],
            [
                'id' => 2,
                'fullname' => 'Dương Quang Long',
                'service' => 2,
                'dateUsed' => '2022-05-06',
                'status' => 1,
                'original' => 'Kiosk',
                'phone' => '78654646546',
                'email' => 'long@gmail.com',
            ]
        ]);
    }
}
