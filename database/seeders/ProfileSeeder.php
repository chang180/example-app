<?php

namespace Database\Seeders;

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
            $user->profile()->create([
                'name' => $user->name,
                'avatar' => 'https://i.pravatar.cc/300',
                'cover' => 'https://i.pravatar.cc/600',
                'bio' => 'I am a web developer',
                'website' => 'https://www.example.com',
                'phone' => '123456789',
                'address' => '123 Main St',
                'city' => 'New York',
                'country' => 'USA',
                'zip' => '10001',
            ]);
        }

    }
}
