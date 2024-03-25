<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\CIAuth;
use App\Libraries\Hash;
use App\Models\User;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    protected $helpers = ['url', 'form', 'CIFunctions'];

    public function loginForm()
    {
        $data = [
            'pageTitle'=>'ContVect',
            'validation'=>null
        ];
        return view('backend/pages/auth/login', $data);
    }

    public function loginHandler()
    {
        $fieldType = filter_var($this->request->getVar('login_id'), FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if ($fieldType == 'email') {
            $isValid = $this->validate([
                'login_id'=>[
                    'rules'=>'required|valid_email|is_not_unique[users.email]',
                    'errors'=>[
                        'required'=>'Se requiere Email',
                        'valid_email'=>'Por favor, introduzca un email válido',
                        'is_not_unique'=>'El siguiente email, no existe en el sistema.'
                    ]
                    ],
                    'password'=>[
                        'rules'=>'required',
                        'errors'=>[
                            'required'=>'Se requiere contraseña, por favor',
                        ]
                    ]
            ]);
        } else {
            $isValid = $this->validate([
                'login_id'=>[
                    'rules'=>'required|is_not_unique[users.username]',
                    'errors'=>[
                        'required'=>'Usuario Incorrecto',
                        'is_not_unique'=>'Usuario no existe en el sistema.'
                    ]
                    ],
                    'password'=>[
                        'rules'=>'required',
                        'errors'=>[
                            'required'=>'Se requiere contraseña, por favor',
                        ]
                    ]
            ]);
        }

        if ( !$isValid) {
            return view('backend/pages/auth/login', [
                'pageTitle' => 'ContVect',
                'validation' => $this->validator
            ]);
        } else {
            $user = new User();
            $userInfo = $user->where($fieldType, $this->request->getVar('login_id'))->first();
            $chech_password = Hash::check($this->request->getVar('password'), $userInfo['password']);

            if (!$chech_password) {
                return redirect()->route('admin.login.form')->with('fail', 'Contraseña Incorrecta')->withInput();
            } else {
                // Importante !!!!
                CIAuth::setCIAuth($userInfo);
                return redirect()->route('admin.home');
            }
            
        }
    }

    public function forgotForm()
    {
        $data = array(
            'pageTitle' => 'Forgot password',
            'validation' => null,
        );

        return view('backend/pages/auth/forgot', $data);
    }

    public function sendPasswordResetLink()
    {
        echo 'Send email password';
    }
}