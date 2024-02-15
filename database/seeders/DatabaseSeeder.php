<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@pos.com',
            'password' => Hash::make('12345678'),
            'role' => 'admin',
        ]);

        /// membuat 10 data seed bisa diganti dengan jumlah data yang diingkan
        \App\Models\User::factory(10)->create();

        $this->call(
            [
                CategorySeeder::class,
                ProductSeeder::class,
            ]
        );
    }
}
