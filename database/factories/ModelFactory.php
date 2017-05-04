<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'login' => $faker->userName,
        'first_name' => $faker->firstNameMale,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'role_title' => DB::table('roles')->get()->random()->title
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Section::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->sentence(random_int(1, 3)),
        'user_login' => DB::table('users')->get()->random()->login
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Topic::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->realText(random_int(20, 80)),
        'user_login' => DB::table('users')->get()->random()->login,
        'section_id' => DB::table('sections')->get()->random()->id
    ];
});

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Post::class, function (Faker\Generator $faker) {
    
    return [
        'content' => join('<br><br>', $faker->paragraphs(random_int(1, 10))),
        'user_login' => DB::table('users')->get()->random()->login,
        'topic_id' => DB::table('topics')->get()->random()->id
    ];
});
