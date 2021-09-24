<?php

use App\Profesor;
use Faker\Factory;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Profesor::class,18)->create();
       /* DB::table('profesor')->insert([
            'id_profesor'=> '1',
            'name'=> 'Jorge',
            'apellido'=> 'coto',
            'dui'=> '2028956-2',
            'telefono'=> '71234444',
            'email'=> 'coto@gmail.com',
            'password'=> bcrypt('profe123')
        ]);*/
    }
}
