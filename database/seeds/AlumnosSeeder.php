<?php

use App\Alumnos;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Alumnos::class,18)->create();
       /* Alumnos::create(
            [
            'id_alumno'=> '1',
            'name'=> 'Nathaly',
            'apellido'=> 'Zelaya',
            'fecha_nacimiento'=> '14/01/2001',
            'direccion'=> 'Jiquilisco',
            'genero'=> 'f',
            'telefono'=> '75302020',
            'email'=> 'nathalyzelaya@gmail.com',
            'password'=> bcrypt('zelaya123')
            
             ]
        );*/
    }
}
