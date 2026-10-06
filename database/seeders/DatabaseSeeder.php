<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Clients;
use App\Models\Products;
use App\Models\Client_Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

         User::factory(10)->create();
         Clients::factory(10)->create();
         Products::factory(10)->create();
         Client_Product::factory(10)->create();


        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',D
        ]); */
    }
}
