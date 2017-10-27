<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => ('Yuri'),
        'email' => ('admin@unio.com'),
        'password' => bcrypt('teste'),
        'biografia' => "Yuri Nao dá nem atenção",
        'remember_token' => str_random(10),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
        // 'universidade_id' => 1,
        // 'tipo_user_id' => 1,
        // 'cursos_id' => 1,
    ];
});

// $factory->defineAs(App\User::class, function (Faker\Generator $faker) {
//     return [
//         'name' => ('Yuri'),
//         'email' => ('unio@unio.com'), 
//         'password' => bcrypt("teste"),
//         'biografia' => "Yuri Nao dá nem atenção",
//         'remember_token' => str_random(10),
//         'created_at' => date("Y-m-d H:i:s"),
//         'updated_at' => date("Y-m-d H:i:s"),
//         'universidade_id' => 1,
//         'tipo_user_id' => 1,
//         'cursos_id' => 1,

        
//     ];
// });