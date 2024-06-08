<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          // Import Faker for generating dummy data
          $faker = \Faker\Factory::create();

          // Generate 40 users
          for ($i = 0; $i < 40; $i++) {
              User::create([
                  'name' => $faker->name,
                  'email' => $faker->unique()->safeEmail,
                  'password' => Hash::make('password'), // Default password
              ]);
          }
    }
}
