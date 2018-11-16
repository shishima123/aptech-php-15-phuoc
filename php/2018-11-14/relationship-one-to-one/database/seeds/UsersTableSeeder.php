<?php

use App\Passport;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $array = Passport::all()->pluck('id')->toArray();
        // dd($array);
        $length = count($array);
        for ($i = 1; $i <= $length; $i++) {
            $p_id = array_rand($array);
            // Cách 1
            User::create([
                'name' => $faker->name,
                'passport_id' => $p_id + 1,
            ]);
            unset($array[$p_id]); // loại bỏ 1 mảng con $p_id ra khỏi mảng $array
            // // dd($array);
            //Cách 2
            // dd($p_id);
            // $checkExits = User::where('passport_id', $p_id + 1)->first();
            // // dd($checkExits);
            // if (!$checkExits) {
            //     User::create([
            //         'name' => $faker->name,
            //         'passport_id' => $p_id + 1,
            //     ]);
            // } else {
            //     $i--;
            // }

        }
    }
}
