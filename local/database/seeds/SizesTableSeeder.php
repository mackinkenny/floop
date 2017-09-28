<?php

use Illuminate\Database\Seeder;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $size = new \App\Size([
            'name' => 'S',
            'type_id' => 1
        ]);
        $size->save();

        $size = new \App\Size([
            'name' => 'M',
            'type_id' => 1
        ]);
        $size->save();

        $size = new \App\Size([
            'name' => 'L',
            'type_id' => 1
        ]);
        $size->save();

        $size = new \App\Size([
            'name' => 'XL',
            'type_id' => 1
        ]);
        $size->save();

        $size = new \App\Size([
            'name' => '42',
            'type_id' => 2
        ]);
        $size->save();

        $size = new \App\Size([
            'name' => '44',
            'type_id' => 2
        ]);
        $size->save();

        $size = new \App\Size([
            'name' => '46',
            'type_id' => 2
        ]);
        $size->save();

        $size = new \App\Size([
            'name' => '48',
            'type_id' => 2
        ]);
        $size->save();
    }
}
