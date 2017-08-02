<?php

use Illuminate\Database\Seeder;

class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $color = new \App\Color([
            'name' => 'Синяя'
        ]);
        $color->save();

        $color = new \App\Color([
            'name' => 'Желтая'
        ]);
        $color->save();

        $color = new \App\Color([
            'name' => 'Красная'
        ]);
        $color->save();
    }
}
