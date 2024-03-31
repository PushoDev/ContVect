<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nombre', 'apellidos', 'cargo', 'email', 'username', 'password', 'picture', 'type_usuario', 'bio', 'created_at', 'update_at'];

    public function obteneruser($id)
    {
        $usuario = $this->db->table('users');
        $usuario->where($id);

        return $usuario->get()->getResultArray();
    }

    public function updatePersonalDetails($user, $id)
    {
        $usuario = $this->db->table('users');
        $usuario->set($user);
        $usuario->where('id', $id);

        return $usuario->update();
    }

}
