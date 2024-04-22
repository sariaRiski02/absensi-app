<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\group;
use App\Models\participant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(4)->create();
        group::factory(10)->create();
        participant::factory(100)->create();
    }
}
