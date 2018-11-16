<?php

use App\Passport;
use Illuminate\Database\Seeder;

class PassportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 1; $i <= 10; $i++) {
            Passport::create([
                'number' => $faker->creditCardNumber,
            ]);

        }
    }
}
