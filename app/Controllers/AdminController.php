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
        return redirect()->route('admin.login.form')->with('fail', 'Salida perfecta, cambios guardados!');
    }

    public function profile()
    {
        $data = array(
            'pageTitle'=>'Perfil de Usuario'
        );
        return view('backend/pages/profile', $data);
    }

    public function updatePersonalDetails()
    {
        $request = \Config\Services::request();
        $validation = \Config\Services::validation();
        $user_id = CIAuth::id();
        
        $isValid = $this->validate([
            'nombre'=>[
                'rules'=>'required',
                'errors'=>[
                    'Se  requiere nombre por favor',
                ]
            ],
            'apellidos'=>[
                'rules'=>'required',
                'errors'=>[
                    'Se  requiere nombre por favor',
                ]
            ],
            'email'=>[
                'rules'=>'required|valid_email|is_not_unique[users.email]',
                'errors'=>[
                    'required'=>'Se requiere Email',
                    'valid_email'=>'Por favor, introduzca un email válido',
                    'is_not_unique'=>'El siguiente email, no existe en el sistema.'
                ]
            ],
            'cargo'=>[
                'rules'=>'required',
                'errors'=>[
                    'Se  requiere nombre por favor',
                ]
            ],
            'username'=>[
                'rules'=>'required|is_unique[users.username, id, '.$user_id.']',
                'errors'=>[
                    'Se  requiere nombre por favor',
                ]
            ],
        ]);

        if (!$isValid) {
            return view('backend/pages/profile', [
                'pageTitle'=>'Perfil de Usuario',
                'validation'=> $this->validator
            ]);

            $user = new User();
            $update = $user->where('id', $user_id)->set([
                'nombre' => $request->getVar('nombre'),
                'apellidos' => $request->getVar('apellidos'),
                'username' => $request->getVar('username'),
                'email' => $request->getVar('email'),
                'cargo' => $request->getVar('cargo'),
                'bio' => $request->getVar('bio'),
                
            ])->update();
        } else {
            
        }
        

        if ($validation->run() == FALSE) {
            $errors = $validation->getErrors();
            return json_encode(['status'=>0, 'error'=>$errors]);
        } else {
            $user = new User();
            $update = $user->where('id', $user_id)->set([
                'nombre' => $request->getVar('nombre'),
                'apellidos' => $request->getVar('apellidos'),
                'username' => $request->getVar('username'),
                'email' => $request->getVar('email'),
                'cargo' => $request->getVar('cargo'),
                'bio' => $request->getVar('bio'),
                
            ])->update();
        }

        if ($update) {
            $user_info = $user->find($user_id);
            return view('backend/pages/profile', [
                'pageTitle'=>'Perfil de Usuario',
                'validation'=> $this->validator
            ]);
        } else {
            echo "Perfect...";
        }
        
    }
    
}