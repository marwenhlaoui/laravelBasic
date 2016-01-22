<?php

use Illuminate\Database\Seeder;
use App\User as user;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(user::class, 5)->create();
    }
}
