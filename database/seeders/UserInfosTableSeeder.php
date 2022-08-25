<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\UserInfo;

class UserInfosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserInfo::truncate();

        $faker = \Faker\Factory::create();

        $password = Hash::make('ohya');

        UserInfo::create([
            'userName' => 'Administrator',
            'account' => 'banana',
            'email' => 'admin@test.com',
            'pw' => $password,
        ]);

        for ($i = 0; $i < 10; $i++) {
            UserInfo::create([
                'userName' => $faker->name,
                'account' => $faker->company,
                'email' => $faker->email,
                'pw' => $password,
            ]);
        }
    }
}
