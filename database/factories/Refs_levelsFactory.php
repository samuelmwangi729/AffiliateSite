<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Refs_levels;
use Faker\Generator as Faker;

$factory->define(Refs_levels::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'reward' => $faker->word,
        'CongraturatoryMessage' => $faker->word,
        'TargetRefferals' => $faker->word,
        'target_per_referal' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
