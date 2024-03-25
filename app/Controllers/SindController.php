<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Sindromes;

use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;

use CodeIgniter\HTTP\ResponseInterface;

class SindController extends BaseController
{
    protected $helpers = ['url', 'form', 'CIFunctions'];
    // Portada del Listado
    public function sindromesFebriles()
    {
        $SindController = new Sindromes();
        $datos = $SindController->listar_pacientes();

        $data = [
            'pageTitle'=>'Sindromes Febriles',
            'validation' => null,
            'datos' => $datos,
        ];
        return view('backend/pages/sindromes/list-sind-febril', $data);
    }

    //Editar pacientes
    public function editPacientes($id)
    {

        $data = [
            'pageTitle' => 'Actualizar Paciente',
            'validation' => null,
            'id' => $id,
        ];
        return view('backend/pages/sindromes/list-sind-febril-act', $data);
    }

    //Pantalla para editar paciente
    //Eliminar paciente
    //Insertar nuevo paciente
    public function insertPaciente()
    {
        $data = [
            'pageTitle' => 'Agregar nuevo paciente',
            'validation' => null,
        ];
        return view('backend/pages/sindromes/list-sind-febril-inst', $data);
    }

}