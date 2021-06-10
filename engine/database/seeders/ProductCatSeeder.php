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
                'product_cat_name' => 'Sepatu Sneakers Pria',
                'product_cat_slug' => 'sepatu-sneakers-pria',
                'product_cat_desc' => 'Tentang Sepatu Sneakers Pria',
                'product_cat_mt_title' => 'Sepatu Sneakers Pria',
                'product_cat_mt_desc'  => 'Tentang Sepatu Sneakers Pria',
            ],
            [
                'product_cat_name' => 'Tas Selempang Pria',
                'product_cat_slug' => 'tas-selempang-pria',
                'product_cat_desc' => 'Tentang Tas Selempang Pria',
                'product_cat_mt_title' => 'Tas Selempang Pria',
                'product_cat_mt_desc'  => 'Tentang Tas Selempang Pria',
            ],
            [
                'product_cat_name' => 'Tas Backpack Pria',
                'product_cat_slug' => 'tas-backpack-pria',
                'product_cat_desc' => 'Tentang Tas Backpack Pria',
                'product_cat_mt_title' => 'Tas Backpack Pria',
                'product_cat_mt_desc'  => 'Tentang Tas Backpack Pria',
            ],
            [
                'product_cat_name' => 'Jersey',
                'product_cat_slug' => 'jersey',
                'product_cat_desc' => 'Tentang Jersey',
                'product_cat_mt_title' => 'Jersey',
                'product_cat_mt_desc'  => 'Tentang Jersey',
            ],
        );

        \DB::table('product_cat')->insert($data);
    }
}
