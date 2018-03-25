<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => env('DEFAULT_USER_NAME', 'Peter Brinck'),
            'email' => env('DEFAULT_USER_EMAIL', 'brinckdesign@gmail.com'),
            'password' => Hash::make(env('DEFAULT_USER_PASSWORD', 'password')),
        ]);
        $user->assignRole('admin');
    }
}
