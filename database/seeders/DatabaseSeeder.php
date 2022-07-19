<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\Property;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();
        // truncate table
        User::truncate();
        Profile::truncate();
        Property::truncate();

        // create user with relationship to profile and property
        User::factory()
        ->count(100000)
        ->hasProfile(1)
        ->hasProperty(10)
        ->create();
    }
}
