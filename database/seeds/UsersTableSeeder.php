<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *ls
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'テストユーザー',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);
    }
}
