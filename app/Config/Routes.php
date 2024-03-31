<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

/**
 * Rutas Filtradas
 * Entorno de RUTAS:
 * nombre de archivo-controlador-funcion
 * Creado por PushoDev
 * https://github.com/PushoDev
 */

$routes->group('muestras', static function($routes){
    /** RUTASSIN PROTECTION PARA MUESTRA DE PROJECTS */
    $routes->group('', [], static function($routes){
        $routes->view('example-page', 'example-page');
    });
    $routes->group('', [], static function($routes){
        $routes->view('example-auth', 'example-auth');
    });
});

$routes->group('admin', static function($routes){

    $routes->group('', ['filter'=>'cifilter:auth'], static function($routes){
        /** RUTAS PARA TODO EL DASHBOARD */
        $routes->get('home', 'AdminController::index',['as'=>'admin.home']);
        $routes->get('logout', 'AdminController::logoutHandler',['as'=>'admin.logout']);

        /** RUTAS PARA PERFIL DE USUARIO */
        $routes->get('profile', 'AdminController::profile',['as'=>'admin.profile']);
        $routes->post('update-personal-details', 'AdminController::updatePersonalDetails',['as'=>'update-personal-details']);
        

        /** RUTAS PARA SINDROMES FEBRILES */
        $routes->get('sindromes_febriles', 'SindController::sindromesFebriles', ['as'=>'sindromes_febriles']);
        $routes->post('agregar-paciente', 'SindController::aggPaciente', ['as'=>'agregar-paciente']);
        $routes->get('paciente/edit_paciente/(:any)', 'SindController::editPaciente/$1', ['as'=>'paciente/edit_paciente/(:any)']);
        $routes->post('update-paciente', 'SindController::updatePaciente', ['as'=>'update-paciente']);
        
    });

    $routes->group('', ['filter'=>'cifilter:quest'], static function($routes){
        /** RUTAS PARA LOGIN Y RECUPERAR PASSWORD */
        $routes->get('login', 'AuthController::loginForm',['as'=>'admin.login.form']);
        $routes->post('login', 'AuthController::loginHandler',['as'=>'admin.login.handler']);
        $routes->get('forgot-password', 'AuthController::forgotForm',['as'=>'admin.forgot.form']);
        $routes->post('send-password-reset-link', 'AuthController::sendPasswordResetLink',['as'=>'send_password_reset_link']);
        $routes->get('password/reset/(:any)', 'AuthController::resetPassword/$1',['as'=>'admin.reset-password']);
    });
});