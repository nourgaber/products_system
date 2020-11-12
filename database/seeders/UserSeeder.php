<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Nour',
            'email' => 'Nour@email.com',
            'password'  => bcrypt('123456')
         ]);
    }
}
