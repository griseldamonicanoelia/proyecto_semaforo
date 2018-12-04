<?php
class Calle{
 /*estados*/
    private $nombre;
    private $semaforos=[];
    /*metdos*/
    public  function setNombre($nuevoNombre)
    {
        $this->nombre=$nuevoNombre;
        
    }
    public  function getNombre(){
        return  $this->nombre;
    }
    public function addSemaforo($nuevoSemaforo){
        array_push($this->semaforos,$nuevoSemaforo)
        ;
    }
    public function deleteSemaforo($codigo){
            ;
    }
    public function listSemaforo(){
        return $this->semaforos;
    }
    public function countSemaforos(){
        
    }
    };
  
  
  