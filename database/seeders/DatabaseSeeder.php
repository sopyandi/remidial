<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Total;
use App\Models\Penjualan;
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
        // Penjualan::factory(3)->create();

       Total::create([
        'id'=> '1',
        'total' =>'0',
        ]);
    }
}
