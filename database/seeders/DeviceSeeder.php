<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('device')->insert([
            [
                'id' => '1',
                'name' => 'Kiosk',
                'addressIP' => '192.168.1.10',
                'statusAction' => 0,
                'statusConnect' => 0,
                'service' => 'Khám tim mạch, khám mắt',
                'category' => 'Kiosk',
                'username' => 'huy',
                'password' => '123456',
                
            ],
            [
                'id' => '2',
                'name' => 'Kiosk2',
                'addressIP' => '192.168.1.10',
                'statusAction' => 0,
                'statusConnect' => 0,
                'service' => 'Khám tim mạch, khám mắt',
                'category' => 'Kiosk',
                'username' => 'huy',
                'password' => '123456',
            ],
            [
                'id' => '3',
                'name' => 'Kiosk3',
                'addressIP' => '192.168.1.10',
                'statusAction' => 0,
                'statusConnect' => 0,
                'service' => 'Khám tim mạch, khám mắt',
                'category' => 'Kiosk',
                'username' => 'huy',
                'password' => '123456',
            ]
        ]);
    }
}
