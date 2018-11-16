<?php

use App\Phone;
use App\User;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $array = User::pluck('id')->toArray();
        $lengthArray = count($array);
        for ($i = 0; $i < $lengthArray; $i++) {
            $userId = array_rand($array);
            //Cách 1
            Phone::create([
                'phone_number' => $faker->phoneNumber,
                'user_id' => $userId + 1,
            ]);
            unset($array[$userId]); // loại bỏ 1 mảng con $p_id ra khỏi mảng $array
            //Cách 2
            // $checkExits = Phone::where('user_id', $userId)->first();
            // if (!$checkExits) {
            //     Phone::create([
            //         'phone_number' => $faker->phoneNumber,
            //         'user_id' => $userId,
            //     ]);
            // } else {
            //     $i--;
            // }
        }
    }
}
