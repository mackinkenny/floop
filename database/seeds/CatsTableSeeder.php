<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cat = new \App\Cat([
            'name' => 'Мужская'
        ]);
        $cat->save();

        $cat = new \App\Cat([
            'name' => 'Женская'
        ]);
        $cat->save();

        $cat = new \App\Cat([
            'name' => 'Детская'
        ]);
        $cat->save();
    }
}
