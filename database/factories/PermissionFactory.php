<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Permission;
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

$factory->define(Permission::class, function (Faker $faker) {
    return [
        'service_id' => random_int(0, 9223372036854775807),
        'name' => $faker->name(),
        'can' => $faker->sentence(),
        'oauth_scope' => $faker->sentence()
    ];
});