<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('product_type')->delete();
        $data = array(
            [
                'product_type_name' => 'Stock',
            ],
            [
                'product_type_name' => 'Pre Order',
            ]
        );
        \DB::table('product_type')->insert($data);
    }
}
