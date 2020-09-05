<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Performer;
use Faker\Generator as Faker;

$factory->define(Performer::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'song' => $faker->sentence($faker->numberBetween(1,3), true),
        'genre_id' => \App\Models\Genre::select('id')->inRandomOrder()->first()->id,
        'year_id' => \App\Models\Year::select('id')->inRandomOrder()->first()->id,
    ];
});
