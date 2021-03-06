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
        // php artisan db:seed
        
         $this->call(UsersTableSeedder::class);
         $this->call(StatesTablaSeeder::class);
         $this->call(TownsTableSeeder::class);
    }
}
