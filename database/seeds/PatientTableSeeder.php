<?php

use App\Models\Calorie;
use Illuminate\Database\Seeder;

class CalorieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Patient::class, 10)
            ->create();

    }
}
