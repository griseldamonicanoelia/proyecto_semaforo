<?php
include_once('class_semaforo/semaforo.php');
include_once ('class_semaforo/calle.php');
include_once ('class_semaforo/semaforo_contador.php');
$nuevoSemaforo=new Semaforo();
$nuevoSemaforo->setCodigo( "345");
echo $nuevoSemaforo->getEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
echo $nuevoSemaforo->cambiarEstado();
echo "<br>";
$peron=new Calle();
$peron->addSemaforo($nuevoSemaforo);
$peron->listSemaforo();
$peron->countSemaforos();
echo"-------------------Semaforo Contador----------------------------"; 
echo"<br>";
$nuevoSemaforoCont=new SemaforoContador();
$nuevoSemaforoCont->setCodigo(999);/*llamo alsemaforo cont y le pongo un codigo*/
echo $nuevoSemaforo->cambiarEstado();

