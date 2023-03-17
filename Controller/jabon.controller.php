<?php
require_once 'Model/jabon.php';

class JabonController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new Jabon();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/jabon.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new Jabon();
        
        if(isset($_REQUEST['id'])){
            $alm = $this->model->getting($_REQUEST['id']);
        }
        
        require_once 'View/header.php';
        require_once 'View/Jabon-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new Jabon();
        
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->precio = $_REQUEST['precio'];
        $alm->marca = $_REQUEST['marca'];
        $alm->color = $_REQUEST['color'];
        $alm->aroma = $_REQUEST['aroma'];


        $alm->id > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}
