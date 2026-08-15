<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Super Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Wahyu JIH',
            'email' => 'wahyu@gmail.com',
            'password' => bcrypt('wahyu@gmail.com'),
            'role' => 'youth_forum',
        ]);

        $this->call([WarisanBumiSeeder::class]);
    }
}
