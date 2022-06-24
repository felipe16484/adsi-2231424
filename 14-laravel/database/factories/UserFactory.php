<?php

namespace Database\Factories;

use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = '';
        $name = '';

        if(rand(1,2) == 1){
            $gender = 'Male';
            $name = $this->faker->name('male');            
        }else{
            $gender = 'Female';
            $name = $this->faker->name('female');                       
        }

        return [
            'fullname'          => $name,
            'email'             => $this->faker->unique()->safeEmail(),
            'phone'             => $this->faker->numberBetween($min = 3101000000, $max = 3201000000),
            'birthday'          => $this->faker->dateTimeBetween('1960-01-01', '1999-01-01'),
            'address'           => $this->faker->address(),
            'photo'             => 'images/no-photo.png',
            'gender'            => $gender,
            'password'          => $this->faker->password(), // password
            'remember_token'    => Str::random(10),
            'email_verified_at' => now(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
