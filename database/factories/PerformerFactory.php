<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Performer;
use Faker\Generator as Faker;

$factory->define(Performer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
    ];
});
