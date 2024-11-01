<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\equipo_tecnico;

class EquipoTecnicoSeeder extends Seeder
{
    public function run()
    {
        equipo_tecnico::create([
            'equipo_de_trabajo_id' => 1,
            'tecnico_id' => 1,
            'vehiculo_id' => 1,
        ]);
        equipo_tecnico::create([
            'equipo_de_trabajo_id' => 1,
            'tecnico_id' => 2,
            'vehiculo_id' => 1,
        ]);
        equipo_tecnico::create([
            'equipo_de_trabajo_id' => 2,
            'tecnico_id' => 3,
            'vehiculo_id' => 2,
        ]);


    }
}
