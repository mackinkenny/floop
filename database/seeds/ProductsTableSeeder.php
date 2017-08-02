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
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 1,
            'color_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 1,
            'color_id' => 2
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 2,
            'color_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 2,
            'color_id' => 2
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Шапка',
            'brand_id' => 2,
            'cat_id' => 2,
            'size_id' => 1,
            'color_id' => 3
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'brand_id' => 1,
            'cat_id' => 1,
            'size_id' => 4,
            'color_id' => 1
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'brand_id' => 2,
            'cat_id' => 1,
            'size_id' => 3,
            'color_id' => 2
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'brand_id' => 2,
            'cat_id' => 2,
            'size_id' => 2,
            'color_id' => 3
        ]);
        $product->save();

        $product = new \App\Product([
            'name' => 'Футболка',
            'brand_id' => 1,
            'cat_id' => 3,
            'size_id' => 1,
            'color_id' => 1
        ]);
        $product->save();
    }
}
