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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});
$factory->define(App\VoterList::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'father_name' => $faker->name,
        'id_no'=>rand(3210253375775,3210253377000),

    ];
});
$factory->define(App\SeederData::class, function (Faker\Generator $faker) {
    return [
        'test' =>rand(1,10),
        'test_status' => $faker->name,


    ];
});
