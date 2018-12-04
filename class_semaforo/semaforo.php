<?php
class Semaforo {
    /*  ESTADOS  */
   private  $codigo;
   private  $estado;
   private  $coloresLuces=array("Rojo","Amarillo","Verde","Amarillo");
    /*   METODOS  */
   public  function __construct() 
   {
       $this->estado="Rojo";
   }
   /*Metdo Setters(modificar)*/
   public  function setCodigo($nuevoCodigo){
       $this->codigo=$nuevoCodigo;
   }
   public  function setEstado($nuevoEstado){
       $this->estado=$nuevoCodigo;
   }
   /*Metodo Getters(leer)*/
   public  function getCodigo(){
       return  $this->codigo;
   }
   public  function getEstado(){
       return  $this->estado;
   }
  public function cambiarEstado(){
       $luz=array_shift($this->coloresLuces);
       array_push($this->coloresLuces,$luz);
       return $this->coloresLuces[0];
   }
    
}