<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@fullbright.id'],
            [
                'name' => 'Admin Full Bright',
                'password' => Hash::make('Fullbright2026'),
                'role' => 'admin',
                'email_verified_at' => now(),
            ],
        );

        $this->call(AnalyticsDemoSeeder::class);
    }
}
