<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatedTableSindFebriles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'fecha' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nombre_apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'sexo' => [
                'type' => 'ENUM',
                // Definir sexo de los pacientes
                'constraint' => ['masculino', 'femenino'],
            ],
            'edad' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'direccion_residencia' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cmf' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'cmu' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'municipio' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'rangos' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'gbtuno' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'gbtdos' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'ingresos' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'hospital' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'areasalud' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'febriles' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'zika' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'fecha_alta' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'hogar_visitado' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'sintomas' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'otros' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp() on update current_timestamp()'
            
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('t_sindromes');
    }

    public function down()
    {
        $this->forge->dropTable('t_sindromes');
    }
}
