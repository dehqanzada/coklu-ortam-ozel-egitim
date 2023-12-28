<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         User::factory()->create([
             'name' => 'Jayhoon',
             'email' => 'jay.dehqanzada@gmail.com',
             'password' => Hash::make('No1@business'),
         ]);

        $this->call([
            SettingSeeder::class,
            StudentSeeder::class,
            ResourceSeeder::class,
            ResourceGroupSeeder::class,
            ResourceGroupItemSeeder::class,
//            ExperienceSeeder::class,
//            ExamSeeder::class,
        ]);
    }
}
