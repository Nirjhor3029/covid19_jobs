<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Giver;
use Faker\Generator as Faker;

$factory->define(Giver::class, function (Faker $faker) {

    return [
        'user_id' => $faker->word,
        'area_id' => $faker->word,
        'name' => $faker->word,
        'phone' => $faker->word,
        'email' => $faker->word,
        'nid' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
