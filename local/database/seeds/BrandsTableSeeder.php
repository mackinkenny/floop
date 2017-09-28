<?php

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $brand = new \App\Brand([
            'name' => 'Adidas'
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'name' => 'Nike'
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'name' => 'Sela'
        ]);
        $brand->save();

        $brand = new \App\Brand([
            'name' => 'Sweden'
        ]);
        $brand->save();
    }
}
