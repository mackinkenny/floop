<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(BrandsTableSeeder::class);
        $this->call(CatsTableSeeder::class);
        //$this->call(ProductsTableSeeder::class);
        $this->call(TypeSizesTableSeeder::class);
        $this->call(ColorsTableSeeder::class);
        $this->call(SizesTableSeeder::class);
        $this->call(SeasonTableSeeder::class);
        //$this->call(TypeTableSeeder::class);
    }
}
