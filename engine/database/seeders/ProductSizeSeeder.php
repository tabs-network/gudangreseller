<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSizeSeeder extends Seeder
{
    public function run()
    {
        \DB::table('product_size')->delete();

        for($i=39;$i<45;$i++){
            for($x=1;$x < 51;$x++){
                $sneaker = [
                    'product_id' => $x,
                    'product_size_option' => $i,
                    'product_size_stock' => rand(50,200),
                ];
                \DB::table('product_size')->insert($sneaker);
            }
        }
        for($i=51; $i<101; $i++){
            $kaos = [
                'product_id' => $i,
                'product_size_option' => 'All Size',
                'product_size_stock' => rand(50,200),
            ];
            \DB::table('product_size')->insert($kaos);
        }
        for($i=101; $i<151; $i++){
            $tas_selempang = [
                'product_id' => $i,
                'product_size_option' => 'All Size',
                'product_size_stock' => rand(50,200),
            ];
            \DB::table('product_size')->insert($tas_selempang);
        }

        for($i=151; $i<201; $i++){
            $tas_backpack = [
                'product_id' => $i,
                'product_size_option' => 'All Size',
                'product_size_stock' => rand(50,200),
            ];
            \DB::table('product_size')->insert($tas_backpack);
        }
    }
}
