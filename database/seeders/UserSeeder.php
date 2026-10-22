<?php

namespace Database\Seeders;

Use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => '123456',
        ]);
    }
}
