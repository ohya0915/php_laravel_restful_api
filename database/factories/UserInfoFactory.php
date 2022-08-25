<?php

namespace Database\Factories;

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\UserInfo;

class UserInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = UserInfo::class;
    public function definition()
    {
        return [
            'userName' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'pw' => $this->faker->password,
            'account' => $this->faker->userName
        ];
    }
}

