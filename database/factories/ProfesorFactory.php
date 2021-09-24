<?php

use App\Profesor;
use Faker\Generator as Faker;

$factory->define(Profesor::class, function (Faker $faker) {
    return [
        'name' => 'coto',
        'apellido' => 'zelaya',
        'dui' => '09976565-86',
        'telefono' => '7076473736',
        'email'=> 'coto123@gmail.com',
        'password'=> bcrypt('coto123')
    ];
});
