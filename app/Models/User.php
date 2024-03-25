<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';
    protected $allowedFields    = ['nombre', 'apellidos', 'cargo', 'email', 'username', 'password', 'picture', 'type_usuario', 'bio', 'created_at', 'update_at'];
}
