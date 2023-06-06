<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    //     $this->call(WordSeeder::class);
    //    $this->call(ChangeStatusWordSeeder::class);

        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password' => bcrypt('12345678'),
        ]);
    }
}
