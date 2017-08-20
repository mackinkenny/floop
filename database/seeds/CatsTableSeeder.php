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
            'name' => 'Мужская',
            'icon' => 'male.png'
        ]);
        $cat->save();

        $cat = new \App\Cat([
            'name' => 'Женская',
            'icon' => 'female.png'
        ]);
        $cat->save();

        $cat = new \App\Cat([
            'name' => 'Детская',
            'icon' => 'child.png'
        ]);
        $cat->save();
    }
}
