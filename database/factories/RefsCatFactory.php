<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\RefsCat;
use Faker\Generator as Faker;

$factory->define(RefsCat::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'description' => $faker->text,
        'reward' => $faker->word,
        'Congraturatory Message' => $faker->word,
        'Target Refferals' => $faker->word,
        'target_per_referal' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
