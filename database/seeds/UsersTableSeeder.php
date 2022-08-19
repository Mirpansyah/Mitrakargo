<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Qodri Khalik',
            'username' => 'qodrikhalik',
            'password' => bcrypt('password'),
            'email' => 'qodrikhaliK@gmail.com',
        ]);
    }
}
