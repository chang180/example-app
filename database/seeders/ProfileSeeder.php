<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // make sure the user has a profile
        $user = auth()->user();
        if (!$user->profile) {
           Profile::create([
                'name' => $user->name,
                'avatar' => 'https://i.pravatar.cc/300',
                'website' => 'https://www.example.com',
                'phone' => '123456789',
                'address' => '123 Main St',
            ]);
        }

    }
}
