<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => 'Abdel Guzmán', 'email' => 'abdel.guzman@siot.gob.bo', 'password' => bcrypt('abdel*2016'), 'role' => 'admin'],
            ['name' => 'Marcelo Arze', 'email' => 'marcelo.arze@siot.gob.bo', 'password' => bcrypt('marze*2016'), 'role' => 'admin']
        ]);
    }
}
