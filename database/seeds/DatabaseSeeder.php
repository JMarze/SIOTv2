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
        $this->call(UsersTableSeeder::class);
        $this->call(DepartamentosTableSeeder::class);
        $this->call(ProvinciasTableSeeder::class);
        $this->call(MunicipiosTableSeeder::class);
        $this->call(DocumentosDigitalesTableSeeder::class);
        $this->call(CodigosTableSeeder::class);
    }
}
