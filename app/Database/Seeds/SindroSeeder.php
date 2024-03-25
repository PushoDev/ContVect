<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SindroSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            // Paciente genesis
            [
                'nombre_apellidos' => 'Pepe Pepito',
                'sexo' => 'masculino',
                'edad' => '27',
                'direccion_residencia' => '5ta avenida rpto. developer',
                'cmf' => '1',
                'cmu' => 'ni idea',
                'municipio' => 'Manzanillo',
                'rangos' => 'ni idea',
                'gbtuno' => 'ni idea',
                'gbtdos' => 'ni idea',
                'ingresos' => 'si',
                'hospital' => 'HCSM de Manzanillo',
                'areasalud' => 'Consejo No.2 area 1',
                'febriles' => 'dengue',
                'zika' => 'no',
                'hogar_visitado' => 'no',
                'sintomas' => 'fiebres, cefalea y dolores musculares',
                'otros' => 'hipertenso',

            ],
        );

        // Insertar paciente de prueba para trabajo
        $this->db->table('t_sindromes')->insertBatch($data);
    }
}