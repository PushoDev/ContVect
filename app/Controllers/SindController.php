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
            "fecha" => $_POST['fecha'],
            "nombre_apellidos" => $_POST['nombre_apellidos'],
            "edad" => $_POST['edad'],
            "direccion_residencia" => $_POST['direccion_residencia'],
            "municipio" => $_POST['municipio'],
            "sexo" => $_POST['sexo'],
            "cmf" => $_POST['cmf'],
            "areasalud" => $_POST['areasalud'],
            "hogar_visitado" => $_POST['hogar_visitado'],
            "gbtuno" => $_POST['gbtuno'],
            "gbtdos" => $_POST['gbtdos'],
            "ingresos" => $_POST['ingresos'],
            "hospital" => $_POST['hospital'],
            "febriles" => $_POST['febriles'],
            "zika" => $_POST['zika'],
            "rangos" => $_POST['rangos'],
            "cmu" => $_POST['cmu'],
            "fecha_alta" => $_POST['fecha_alta'],
            "sintomas" => $_POST['sintomas'],
            "otros" => $_POST['otros'],
            
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
            "fecha" => $_POST['fecha'],
            "nombre_apellidos" => $_POST['nombre_apellidos'],
            "edad" => $_POST['edad'],
            "direccion_residencia" => $_POST['direccion_residencia'],
            "municipio" => $_POST['municipio'],
            "sexo" => $_POST['sexo'],
            "cmf" => $_POST['cmf'],
            "areasalud" => $_POST['areasalud'],
            "hogar_visitado" => $_POST['hogar_visitado'],
            "gbtuno" => $_POST['gbtuno'],
            "gbtdos" => $_POST['gbtdos'],
            "ingresos" => $_POST['ingresos'],
            "hospital" => $_POST['hospital'],
            "febriles" => $_POST['febriles'],
            "zika" => $_POST['zika'],
            "rangos" => $_POST['rangos'],
            "cmu" => $_POST['cmu'],
            "fecha_alta" => $_POST['fecha_alta'],
            "sintomas" => $_POST['sintomas'],
            "otros" => $_POST['otros'],

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