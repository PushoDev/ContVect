<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $data = array(
            // Usuario General...
            [
                'nombre' => 'Luis Alberto',
                'apellidos' => 'Guisado',
                'cargo' => 'Desarrollador',
                'email' => 'bethocubans1990@gmail.com',
                'username' => 'pusho.dev',
                'password' => password_hash('pusho2024', PASSWORD_DEFAULT),
                'type_usuario' => 'admin',
                'bio' => 'Soy DevsOp, con conocimientos UX/UI, graduado en el IPI de Mzllo'
            ],
        );

        // Insertar datos en la tabla
        $this->db->table('users')->insertBatch($data);
    }
}