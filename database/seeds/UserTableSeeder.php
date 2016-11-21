<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        /*
         * Create 10 Users in the app
         */
        factory(User::class, 3)
            ->create();

    }
}
