<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Sindromes;

class AdminController extends BaseController
{
    protected $helpers =['url', 'form', 'CIFunctions'];

    public function index()
    {
        $SinController = new Sindromes();
        $pacientes = $SinController->cantidadPacientes();

        $data = [
            'pageTitle'=> 'DashBoard',
            'pacientes' => $pacientes,
        ];
        return view('backend/pages/home', $data);
    }

    public function logoutHandler()
    {
        CIAuth::forget();
        return redirect()->route('admin.login.form')->with('success', 'Salida perfecta, cambios guardados!');
    }

    public function profile()
    {
        $data = array(
            'pageTitle'=>'Perfil de Usuario',
        );

        return view('backend/pages/profile', $data);
    }
    
    public function updatePersonalDetails()
    {
        
    }
}