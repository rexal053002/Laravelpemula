<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(PostTableSeeder::class);
        // $this->call(PostsTableSiswa::class);
        // $this->call(tokoSeeder::class);
        // factory(App\Tabungan::class, 100)->create();
        factory(App\Customers::class, 1000)->create();
    }
}
