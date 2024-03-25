<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_usuario' => [
                'type' => 'INT',
                'constraint' => '5',
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
            'e_mail' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'picture' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
                'null' => true,
            ],
            'type_usuario' => [
                'type' => 'ENUM',
                // Definir los roles de los usuarios
                'constraint' => ['admin', 'estadistico', 'epidemiologo'],
                // Usuario Predeterminado
                'default' => 'admin',
            ],
        ]);

        $this->forge->addKey('id_usuario', true);
        $this->forge->createTable('t_usuarios');
    }

    public function down()
    {
        $this->forge->dropTable('t_usuarios');
    }
    
}