<?php

use App\Models\User;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    public function run()
    {

        factory(User::class)->create([
            'role_id' => 1
        ]);
        factory(User::class)->create([
            'role_id' => 2
        ]);

    }
}