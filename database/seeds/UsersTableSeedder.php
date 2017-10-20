<?php

use Illuminate\Database\Seeder;

class UsersTableSeedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // php artisan db:seed
        
        DB::table('users')->insert([
            'name'=>'admin',
            'email'=>'admin@appmarket.com',
            'password'=> bcrypt('admin')
        ]);
    }
}
