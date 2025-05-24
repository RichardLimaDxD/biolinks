<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Link;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        User::all()
            ->each(function (User $user) {
               Link::factory()
                    ->count(random_int(5, 8))
                    ->create([
                        'user_id' => $user->id,
                    ]);
            });
    }
}
