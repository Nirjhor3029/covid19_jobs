<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Seeker;
use Faker\Generator as Faker;

$factory->define(Seeker::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'area_id' => $faker->word,
        'name' => $faker->word,
        'phone' => $faker->word,
        'email' => $faker->word,
        'nid' => $faker->word,
        'per_day_income' => $faker->randomDigitNotNull,
        'previous_experience' => $faker->randomDigitNotNull,
        'willingness_to_travel' => $faker->randomDigitNotNull,
        'group_id' => $faker->randomDigitNotNull,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
