<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // dd(clientesSeeder.php::class);
        // $this->call(UsersTableSeeder::class);
       //$this->call(clientesSeeder::class);
        factory(Cliente::class,10)->create();

    }
}
