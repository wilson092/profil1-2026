<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\ProfilSeeder;
use Database\Seeders\TeacherSeeder;
use Database\Seeders\StudentSeeder;
use Database\Seeders\OrtuSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            ProfilSeeder::class,
            TeacherSeeder::class,
            StudentSeeder::class,
            OrtuSeeder::class,

        ]);
    }
}
