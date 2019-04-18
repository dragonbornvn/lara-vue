<?php

use App\User;
use App\Topic;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => implode(' ', $faker->words(2)),
        'description' => $faker->sentence(),
    ];
});

$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    return [
        'category_id' => null,
        'user_id' => 1,
        'title' => $faker->sentence,
        'body' => $faker->paragraph(7),
        'views' => $faker->numberBetween(0, 10000),
        'created_at' => $faker->datetimeBetween('-5 months'),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'topic_id' => 1,
        'user_id' => 1,
        'body' => $faker->sentence,
    ];
});

