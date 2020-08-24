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
        App\User::create([
            'name' => 'Example',
            'email' => 'example@gmail.com',
            'password' => 'password',
            'role_id' => 1,
            'is_active' => 1,
        ]);
    }
}
