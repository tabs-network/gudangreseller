<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductCatSeeder extends Seeder
{
    public function run()
    {
        \DB::table('product_cat')->delete();
        
        $data = array(
            [
                'product_cat_id' => '1',
                'product_cat_name' => 'Sepatu Sneakers Pria',
                'product_cat_slug' => 'sepatu-sneakers-pria',
                'product_cat_desc' => 'Tentang Sepatu Sneakers Pria',
                'product_cat_mt_title' => 'Sepatu Sneakers Pria',
                'product_cat_mt_desc'  => 'Tentang Sepatu Sneakers Pria',
            ],
            [
                'product_cat_id' => '2',
                'product_cat_name' => 'Tas Selempang Pria',
                'product_cat_slug' => 'tas-selempang-pria',
                'product_cat_desc' => 'Tentang Tas Selempang Pria',
                'product_cat_mt_title' => 'Tas Selempang Pria',
                'product_cat_mt_desc'  => 'Tentang Tas Selempang Pria',
            ],
            [
                'product_cat_id' => '3',
                'product_cat_name' => 'Tas Backpack Pria',
                'product_cat_slug' => 'tas-backpack-pria',
                'product_cat_desc' => 'Tentang Tas Backpack Pria',
                'product_cat_mt_title' => 'Tas Backpack Pria',
                'product_cat_mt_desc'  => 'Tentang Tas Backpack Pria',
            ],
            [
                'product_cat_id' => '4',
                'product_cat_name' => 'Kaos',
                'product_cat_slug' => 'Kaos',
                'product_cat_desc' => 'Tentang Kaos',
                'product_cat_mt_title' => 'Kaos',
                'product_cat_mt_desc'  => 'Kaos',
            ],
        );

        \DB::table('product_cat')->insert($data);
    }
}
