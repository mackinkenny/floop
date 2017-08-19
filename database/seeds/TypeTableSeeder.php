<?php

use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $type = new \App\Type([
            'name' => 'Рубашка'
        ]);
        $type->save();

        $type = new \App\Type([
            'name' => 'Брюки'
        ]);
        $type->save();

        $type = new \App\Type([
            'name' => 'Футболка'
        ]);
        $type->save();

        $type = new \App\Type([
            'name' => 'Джинсы'
        ]);
        $type->save();

        $type = new \App\Type([
            'name' => 'Кеды'
        ]);
        $type->save();

        $type = new \App\Type([
            'name' => 'Бутсы'
        ]);
        $type->save();

        $type = new \App\Type([
            'name' => 'Шапки'
        ]);
        $type->save();

        $type = new \App\Type([
            'name' => 'Толстовки'
        ]);
        $type->save();
    }
}
