<?php
// Inclui arquivos de controlador necessários para lidar com diferentes ações
require 'controllers/AuthController.php';//Incluir controlador de autenticação
require 'controllers/UserController.php';//Inclui controlador de usuários
require 'controller/DashboardController.php';//Inclui o controlador de Dashboard

//Cria instâncias dos controladores para utilizar seus métodos
$authController = new AuthController(); // Instancia controlador de autenticação
$userController = new UserController();// Instancia controlador de usuário
$dashboardController = new DashboardController(); // Instancia controlador dashboard 

//Coleta a ação de URL, se não houver ação defina, usa 'login' como padrão
$action = $_GET['action'] ?? 'login';//Usa operador de coalescência nula (??) para definir 'login' se 'action' não estiver presente

switch($action){
    case 'login':
        $authController->login(); //Chama o método de login do controlador de autenticação
        break;
    case 'register':
        $userController->register();//Chama o método de Register do controlador de autenticação
        break;
    default:
        $authController->login();
        break;
}
?>
