<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\SocialAccount;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Carbon\Carbon;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(SocialAccount::class, function (Faker $faker) {
    return [
        'user_id' => random_int(1, 10),
        'priority' => random_int(0, 4294967295),
        'nick_name' => $faker->sentence(),
        'full_name' => $faker->sentence(),
        'avatar' => $faker->sentence()
    ];
});