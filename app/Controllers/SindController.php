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
        $totalPacientes = $SindController->cantidadPacientes();
        $datos = $SindController->listar_pacientes();

        $mensaje = session('mensaje');

        $data = [
            'pageTitle'=>'Sindromes Febriles',
            'validation' => null,
            'datos' => $datos,
            'mensaje' => $mensaje,
            'totalPacientes' => $totalPacientes,
        ];
        return view('backend/pages/sindromes/list-sind-febril', $data);
    }

    // Agregar paciente
    public function aggPaciente()
    {
        //    print_r($_POST);
        $datos = [
            "nombre_apellidos" => $_POST['nombre_apellidos'],
            "edad" => $_POST['edad'],
            "direccion_residencia" => $_POST['direccion_residencia'],
            
        ];

        $SindController = new Sindromes();
        // echo $SindController->insertarPaciente($datos);

        $respuesta = $SindController->insertarPaciente($datos);

        if ($respuesta > 0) {
            return redirect()->to(route_to('sindromes_febriles'))->with('mensaje', '1');
        } else {
            return null;
        }
        
    }

    public function editPaciente($id)
    {
        $obtener = ["id" => $id];

        $SindController= new Sindromes();
        $respuesta = $SindController->obtenerPaciente($obtener);

        $data = [
            'pageTitle'=>'Editar Paciente',
            'validation' => null,
            'respuesta' => $respuesta,
        ];
        return view('backend/pages/sindromes/edit-sind-febril', $data);
    }

    public function updatePaciente()
    {
        $datos = [
            "nombre_apellidos" => $_POST['nombre_apellidos'],
            "edad" => $_POST['edad'],
            "direccion_residencia" => $_POST['direccion_residencia'],
        ];

        $id = $_POST['id'];
        $SindController = new Sindromes();
        $respuesta = $SindController->actualizarPaciente($datos, $id);

        if ($respuesta) {
            return redirect()->to(route_to('sindromes_febriles'))->with('mensaje', '2');
        } else {
            return null;
        }
    }

}