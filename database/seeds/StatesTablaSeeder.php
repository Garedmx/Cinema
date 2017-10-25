<?php

use Illuminate\Database\Seeder;

class StatesTablaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $states=[   
                    ['name'=>'Ciudad de México'],
                    ['name'=>'Estado de México'],
                    ['name'=>'Veracruz'],
                    ['name'=>'Puebla'],
                    ['name'=>'Queretaro']
                ];
        DB::table('states')->insert($states);
    }
}
