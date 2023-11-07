<?php
require_once 'Model/vuelos.php';

class vuelosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new vuelos();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/vuelos.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new vuelos();
        
        if(isset($_REQUEST['ID'])){
            $alm = $this->model->getting($_REQUEST['ID']);
        }
        
        require_once 'View/header.php';
        require_once 'View/vuelos-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new vuelos();
        
        $alm->ID = $_REQUEST['ID'];
        $alm->num_vuelo = $_REQUEST['num_vuelo'];
        $alm->hora_salida = $_REQUEST['hora_salida'];
        $alm->fecha_salida = $_REQUEST['fecha_salida'];
        $alm->hora_llegada = $_REQUEST['hora_llegada'];
        $alm->cant_pasajeros = $_REQUEST['cant_pasajeros'];
        $alm->horas_de_vuelo = $_REQUEST['horas_de_vuelo'];
        $alm->lugar_salida = $_REQUEST['lugar_salida'];
        $alm->destino = $_REQUEST['destino'];

        // SI ID vuelos ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA vuelos, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->ID > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->ID > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['ID']);
        header('Location: index.php');
    }
}
