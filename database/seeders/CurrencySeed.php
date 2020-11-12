<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class CurrencySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('currencies')->insert([
            'name' => 'EGP',
            'transtion_factor' => '15.69',
         ]);

         DB::table('currencies')->insert([
            'name' => 'Euro',
            'transtion_factor' => '1.19',
         ]);

         DB::table('currencies')->insert([
            'name' => 'Kuwaiti Dinar',
            'transtion_factor' => '0.31',
         ]);

    }
}
