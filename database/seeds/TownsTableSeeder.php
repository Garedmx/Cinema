<?php

use Illuminate\Database\Seeder;

class TownsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $towns=[
            ['state_id'=>'1','name'=>'Iztapalapa'],
            ['state_id'=>'1','name'=>'Iztacalco'],
            ['state_id'=>'1','name'=>'Cuahutemoc'],
            ['state_id'=>'2','name'=>'Nezahualcoyotl'],
            ['state_id'=>'2','name'=>'Atizapan de Zaragoza'],
            ['state_id'=>'2','name'=>'Tlanepantla'],
            ['state_id'=>'3','name'=>'Xalapa'],
            ['state_id'=>'3','name'=>'Chachalacas'],
            ['state_id'=>'4','name'=>'Cholula'],
            ['state_id'=>'4','name'=>'Estado de Puebla'],
            ['state_id'=>'5','name'=>'Queretaro'],
            ['state_id'=>'5','name'=>'Otro Queretaro'],
        ];
        DB::table('towns')->insert($towns);
    }
}
