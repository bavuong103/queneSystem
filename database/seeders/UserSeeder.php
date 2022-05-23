<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            [
                'username' => 'tuyetnguyen@12',
                'password' => bcrypt('123456'),
                'email' => 'tuyetnguyen123@gmail.com',
                'fullname' => 'Nguyen Văn A',
                'phone' => '094564654',
                'role' => 1,
                'status' => 1,
            ],
            [
                'username' => 'tuyetnguyen@10',
                'password' => bcrypt('123456'),
                'email' => 'tuyetnguyen1234@gmail.com',
                'fullname' => 'Nguyen Văn B',
                'phone' => '094564654',
                'role' => 1,
                'status' => 1,
            ],
            [
                'username' => 'tuyetnguyen@22',
                'password' => bcrypt('123456'),
                'email' => 'tuyetnguyen222@gmail.com',
                'fullname' => 'Nguyen Văn C',
                'phone' => '094564654',
                'role' => 2,
                'status' => 1,
            ]
        ]);
    }
}
