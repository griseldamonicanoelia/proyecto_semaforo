<?php 
include_once ("semaforo.php");

class SemaforoContador extends Semaforo{
    private $contador;
    public  function setContador($nuevoContador){
        $this->contador=$nuevoContador;
    }
    public  function getContador(){
        $this->contador;
    }
    
   public function disminuirContador() {
       return $this->contador=$this->contador-1;
       
        ;
   } 
}