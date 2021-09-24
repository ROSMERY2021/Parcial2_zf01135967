<?php

use App\Alumnos;
use Faker\Generator as Faker;

$factory->define(Alumnos::class, function (Faker $faker) {
    return [
        'name' => 'nathaly',
        'apellido' => 'zelaya',
        'fecha_nacimiento' => '14/01/2001',
        'direccion' => 'jiquilisco',
        'genero' => 'f',
        'telefono' => '70203030',
        'email' => 'nathalyzelaya@gmail.com',
        'password' => bcrypt('zelaya')
    ];
});
