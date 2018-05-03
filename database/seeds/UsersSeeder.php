<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $users = [
            [
                'name' => 'Алексей',
                'email' => 'justifydev@gmail.com',
                'password' => bcrypt('123456'),
                'is_admin' => true
            ],

            [
                'name' => Str::random(mt_rand(6, 50)),
                'email' => Str::random(mt_rand(3, 10)) . '@gmail.com',
                'password' => bcrypt(Str::random(30)),
                'is_admin' => false
            ],

            [
                'name' => Str::random(mt_rand(6, 50)),
                'email' => Str::random(mt_rand(3, 10)) . '@gmail.com',
                'password' => bcrypt(Str::random(30)),
                'is_admin' => false
            ],

            [
                'name' => Str::random(mt_rand(6, 50)),
                'email' => Str::random(mt_rand(3, 10)) . '@gmail.com',
                'password' => bcrypt(Str::random(30)),
                'is_admin' => false
            ],

            [
                'name' => Str::random(mt_rand(6, 50)),
                'email' => Str::random(mt_rand(3, 10)) . '@gmail.com',
                'password' => bcrypt(Str::random(30)),
                'is_admin' => false
            ],

            [
                'name' => Str::random(mt_rand(6, 50)),
                'email' => Str::random(mt_rand(3, 10)) . '@gmail.com',
                'password' => bcrypt(Str::random(30)),
                'is_admin' => false
            ],

            [
                'name' => 'Владимир',
                'email' => 'vladimir@mail.ru',
                'password' => bcrypt('123456'),
                'is_admin' => false
            ]
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'is_admin' => $user['is_admin']
            ]);
        }
    }
}
