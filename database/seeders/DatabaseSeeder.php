<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\models\User;
use App\Models\Track;
use App\Models\Team;
use App\Models\Event;
use App\Models\MarshalPost;

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

        User::factory()->create([
            'name' => 'Benjamin',
            'email' => 'benjamin.olv@gmail.com',
            'password' => Hash::make('mpTracking6900')
        ]);

        Track::factory()
            ->count(2)
            ->has(Event::factory()->count(4))
            ->has(MarshalPost::factory()->count(30))
            ->create();

        Team::factory()
            ->count(100)
            ->create();
    }
}
