<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([
            'name' => 'Шапка',
            'price' => 10000,
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 1,
            'color_id' => 1,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'price' => 10000,
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 1,
            'color_id' => 2,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'price' => 10000,
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 2,
            'color_id' => 1,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'price' => 10000,
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 2,
            'color_id' => 2,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'price' => 10000,
            'brand_id' => 2,
            'cat_id' => 2,
            'size_id' => 1,
            'color_id' => 3,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'price' => 10000,
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 4,
            'color_id' => 1,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'price' => 10000,
            'brand_id' => 2,
            'cat_id' => 1,
            'size_id' => 3,
            'color_id' => 2,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'price' => 10000,
            'brand_id' => 2,
            'cat_id' => 2,
            'size_id' => 2,
            'color_id' => 3,
            'boutic_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'price' => 10000,
            'brand_id' => 1,
            'cat_id' => 3,
            'size_id' => 1,
            'color_id' => 1,
            'boutic_id' => 1
        ]);
        $product->save();
    }
}
