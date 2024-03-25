<?php

namespace App\Models;

use CodeIgniter\Model;

class Sindromes extends Model
{
    protected $table         = 'sindromes';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['fecha','nombre_apellidos', 'sexo', 'edad', 'direccion_residencia', 'cmf', 'cmu', 'municipio', 'rangos', 'gbtuno', 'gbtdos', 'ingresos', 'hospital', 'areasalud', 'febriles', 'zika', 'fecha_alta', 'hogar_visitado', 'sintomas', 'otros', 'created_at', 'updated_at'];

    public function listar_pacientes()
    {
        $pacientes = $this->db->query("SELECT * FROM t_sindromes");
        return $pacientes->getResult();
    }
    
}