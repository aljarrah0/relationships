<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Profile::create([
            'user_id' => 1,
            'fname' => 'محمد',
            'lname' => 'الجراح',
            'avatar' => 'image.png',
        ]);

        Profile::create([
            'user_id' => 2,
            'fname' => 'أحمد',
            'lname' => 'الجراح',
            'avatar' => 'image.png',
        ]);

    }
}
