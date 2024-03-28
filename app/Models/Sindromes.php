<?php

namespace App\Models;

use CodeIgniter\Model;

class Sindromes extends Model
{
    protected $table         = 't_sindromes';
    protected $primaryKey    = 'id';
    protected $allowedFields = ['fecha','nombre_apellidos', 'sexo', 'edad', 'direccion_residencia', 'cmf', 'cmu', 'municipio', 'rangos', 'gbtuno', 'gbtdos', 'ingresos', 'hospital', 'areasalud', 'febriles', 'zika', 'fecha_alta', 'hogar_visitado', 'sintomas', 'otros', 'created_at', 'updated_at'];

    public function listar_pacientes()
    {
        $pacientes = $this->db->query("SELECT * FROM t_sindromes");
        return $pacientes->getResult();
    }

    public function cantidadPacientes()
    {
        return $this->countAll();
    }

    public function insertarPaciente($datos)
    {
        $nombre_appellidos = $this->db->table('t_sindromes');
        $nombre_appellidos->insert($datos);

        return $this->db->insertID();
    }

    public function obtenerPaciente($datos)
    {
        $nombre_appellidos = $this->db->table('t_sindromes');
        $nombre_appellidos->where($datos);

        return $nombre_appellidos->get()->getResultArray();
    }
    
}