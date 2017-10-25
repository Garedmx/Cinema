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
         $this->call(UsersTableSeedder::class);
         $this->call(StatesTablaSeeder::class);
         $this->call(TownsTableSeeder::class);
    }
}
