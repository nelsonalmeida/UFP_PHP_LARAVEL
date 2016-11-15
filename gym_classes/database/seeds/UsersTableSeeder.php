<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = "Maria Ribeiro";
        $user->email = "maria@email.com";
        $user->password = crypt("secret", "");
        $user->save();
    }
}
