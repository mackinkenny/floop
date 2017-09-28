<?php

use Illuminate\Database\Seeder;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $season = new \App\Season([
            'name' => 'Лето'
        ]);
        $season->save();

        $season = new \App\Season([
            'name' => 'Осень'
        ]);
        $season->save();

        $season = new \App\Season([
            'name' => 'Зима'
        ]);
        $season->save();

        $season = new \App\Season([
            'name' => 'Весна'
        ]);
        $season->save();
    }
}
