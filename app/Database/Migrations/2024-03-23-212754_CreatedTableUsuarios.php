<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTUsuarios extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'apellidos' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cargo' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255', 
            ],
            'picture' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
                'null' => true,
            ],
            'type_usuario' => [
                'type' => 'ENUM',
                // Definir los roles de los usuarios
                'constraint' => ['admin', 'estadistico', 'epidemiologo'],
                // Usuario Predeterminado
                'default' => 'admin',
            ],
            'bio' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],

            'created_at timestamp default current_timestamp',
            'updated_at timestamp default current_timestamp() on update current_timestamp()'
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users');
    }

    public function down()
    {
        $this->forge->dropTable('users');
    }
    
}