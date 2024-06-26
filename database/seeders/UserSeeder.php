<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'mohammed aljarrah',
            'email' => 'moh.moh.aljarrah@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        User::create([
            'name' => 'ahmed aljarrah',
            'email' => 'ahmed.moh.aljarrah@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
