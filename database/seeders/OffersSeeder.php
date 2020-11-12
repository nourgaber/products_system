<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class OffersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('offers')->insert([
            'name' => '10% off shoes',
            'discount_product_id' => 4 ,
            'discount_product_quantity' => null ,
            'discount' => 10
         ]);

         DB::table('offers')->insert([
            'name' => '50% off jacket:',
            'discount_product_id' => 3 ,
            'main_product_id' => 1 ,
            'main_product_quantity' => 2 ,
            'discount_product_quantity' => 1,
            'discount' => 50
         ]);
    }
}
