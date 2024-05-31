<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // UserController::factory(10)->create();

        User::factory()->create([
            'name' => 'Mutlucan',
            'last_name' => 'Çelİk',
            'email' => 'mtlcnclk98@gmail.com',
            'password' => '$2y$12$OP5LtoO/qEhvfxrZNSW78uElAjObnmifY8FXfbl57Z0k5N2gy1VLe' //541303
        ]);
    }
}
