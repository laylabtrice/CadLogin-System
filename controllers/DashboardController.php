<?php
class DashboardController
{
    //Verificar se user está autenticado
    public function index(){
        session_start();

        if(!isset($_SESSION['usuario_id'])){
            
        }
    }
}

?>