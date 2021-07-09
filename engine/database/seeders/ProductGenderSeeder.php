<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_gender')->delete();
        $data = array(
            [
                'product_gender_id' => '1',
                'product_gender_name' => 'Fashion Pria',
                'product_gender_desc' => 'Tentang Fashion Pria',
                'product_gender_slug' => 'fashion-pria',
                'product_gender_mt_title' => 'Fashion Pria',
                'product_gender_mt_desc' => 'Tentang Fashion Pria',
            ],
            [
                'product_gender_id' => '2',
                'product_gender_name' => 'Fashion Wanita',
                'product_gender_desc' => 'Tentang Fashion Wanita',
                'product_gender_slug' => 'fashion-wanita',
                'product_gender_mt_title' => 'Fashion Wanita',
                'product_gender_mt_desc' => 'Tentang Fashion Wanita',
            ],
            [
                'product_gender_id' => '3',
                'product_gender_name' => 'Fashion Anak',
                'product_gender_desc' => 'Tentang Fashion Anak',
                'product_gender_slug' => 'fashion-pria',
                'product_gender_mt_title' => 'Fashion Anak',
                'product_gender_mt_desc' => 'Tentang Fashion Anak',
            ],
            [
                'product_gender_id' => '4',
                'product_gender_name' => 'Fashion Custom',
                'product_gender_desc' => 'Tentang Fashion Custom',
                'product_gender_slug' => 'fashion-pria',
                'product_gender_mt_title' => 'Fashion Custom',
                'product_gender_mt_desc' => 'Tentang Fashion Custom',
            ],
        );
        \DB::table('product_gender')->insert($data);
    }
}
