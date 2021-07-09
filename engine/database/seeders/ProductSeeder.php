<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class ProductSeeder extends Seeder
{
    public function run()
    {
        \DB::table('product')->delete();
        $random_cover = rand(1,10);

        $faker = \Faker\Factory::create();

        for ($i = 1; $i < 51; $i++) {
            $sneakers_name = 'Sepatu Sneakers '.$faker->text(30).' Murah Bandung';
            $sneakers = array(
                [
                    'product_id' => $i,
                    'product_cover' => 'sneakers-'.rand(1,10).'.'.'jpg',
                    'product_name' => $sneakers_name,
                    'product_cat_id' => 1,
                    'product_gender_id' => 1,
                    'product_desc' => $sneakers_name.' '.$faker->text(500),
                    'product_video_url' => 'url template',
                    'product_min_order' => 1,
                    'product_price' => rand(400,500).'000',
                    'product_disc_price' => rand(300,399).'000',
                    'product_sku' => 'SNK '.rand(100,999),
                    'product_type_id' => 1,
                    'product_slug' => Str::of($sneakers_name)->slug('-'),
                    'product_status_id' => 1,
                    'product_mt_title' => $sneakers_name,
                    'product_mt_desc' => $sneakers_name.' '.$faker->text(500),
                ],
            );

            \DB::table('product')->insert($sneakers);
        }
        for ($i = 51; $i < 101; $i++) {
            $kaos_name = 'Kaos Murah Berkualitas '.$faker->text(30).' Bandung';
            $kaos = array(
                [
                    'product_id' => $i,
                    'product_cover' => 'kaos-'.rand(1,10).'.'.'jpg',
                    'product_name' => $kaos_name,
                    'product_cat_id' => 4,
                    'product_gender_id' => 1,
                    'product_desc' => $kaos_name.' '.$faker->text(500),
                    'product_video_url' => 'url template',
                    'product_min_order' => 1,
                    'product_price' => rand(40,50).'000',
                    'product_disc_price' => rand(30,39).'000',
                    'product_sku' => 'KOS '.rand(100,999),
                    'product_type_id' => 1,
                    'product_slug' => Str::of($kaos_name)->slug('-'),
                    'product_status_id' => 1,
                    'product_mt_title' => $kaos_name,
                    'product_mt_desc' => $kaos_name.' '.$faker->text(500),
                ],
            );

            \DB::table('product')->insert($kaos);
        }
        for ($i = 101; $i < 151; $i++) {
            $tas_selempang_name = 'Tas Selempang Murah Berkualitas '.$faker->text(30);
            $tas_selempang = array(
                [
                    'product_id' => $i,
                    'product_cover' => 'tas-selempang-'.rand(1,10).'.'.'jpg',
                    'product_name' => $tas_selempang_name,
                    'product_cat_id' => 2,
                    'product_gender_id' => 1,
                    'product_desc' => $tas_selempang_name.' '.$faker->text(500),
                    'product_video_url' => 'url template',
                    'product_min_order' => 1,
                    'product_price' => rand(40,50).'000',
                    'product_disc_price' => rand(30,39).'000',
                    'product_sku' => 'SMP '.rand(100,999),
                    'product_type_id' => 1,
                    'product_slug' => Str::of($tas_selempang_name)->slug('-'),
                    'product_status_id' => 1,
                    'product_mt_title' => $tas_selempang_name,
                    'product_mt_desc' => $tas_selempang_name.' '.$faker->text(500),
                ],
            );

            \DB::table('product')->insert($tas_selempang);
        }
        for ($i = 151; $i < 201; $i++) {
            $tas_backpack_name = 'Tas Backpack Berkualitas '.$faker->text(30);
            $tas_backpack = array(
                [
                    'product_id' => $i,
                    'product_cover' => 'tas-backpack-'.rand(1,10).'.'.'jpg',
                    'product_name' => $tas_backpack_name,
                    'product_cat_id' => 3,
                    'product_gender_id' => 1,
                    'product_desc' => $tas_backpack_name.' '.$faker->text(500),
                    'product_video_url' => 'url template',
                    'product_min_order' => 1,
                    'product_price' => rand(40,50).'000',
                    'product_disc_price' => rand(30,39).'000',
                    'product_sku' => 'BCK '.rand(100,999),
                    'product_type_id' => 1,
                    'product_slug' => Str::of($tas_backpack_name)->slug('-'),
                    'product_status_id' => 1,
                    'product_mt_title' => $tas_backpack_name,
                    'product_mt_desc' => $tas_backpack_name.' '.$faker->text(500),
                ],
            );
            \DB::table('product')->insert($tas_backpack);
        }
    }
}
