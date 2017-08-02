<?php

use Illuminate\Database\Seeder;

class TypeSizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = new \App\TypeSize([
            'name' => 'Европейская'
        ]);
        $type->save();
        $type = new \App\TypeSize([
            'name' => 'Стандарт'
        ]);
        $type->save();
    }
}
