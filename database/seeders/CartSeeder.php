<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert([
            'user_id' => 1,
            'total' => 0
         ]);
    }
}
