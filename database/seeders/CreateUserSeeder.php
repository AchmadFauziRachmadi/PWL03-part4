<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use app\Models\User;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'      => 'IsUser',
                'username'  => 'IsUser',
                'email'     => 'user@gmail.com',
                'password'  => bcrypt('12345'),
                'roles_id'  => 2
            ],
            [
                'name'      => 'IsAdmin',
                'username'  => 'IsAdmin',
                'email'     => 'admin@gmail.com',
                'password'  => bcrypt('12345'),
                'roles_id'  => 1
            ]
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
