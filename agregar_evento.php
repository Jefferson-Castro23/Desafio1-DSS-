<?php
require_once('eventos.class.php');

$titulo = $_POST['titulo'];
$fecha = $_POST['fecha'];
$lugar = $_POST['lugar'];
$descripcion = $_POST['descripcion'];

$eventos = new Evento($titulo, $fecha, $lugar, $descripcion);


$_SESSION[SESION_EVENTOS][ARREGLO_EVENTOS][] = $eventos;

if (isset($_POST['borrar'])) {
    unset($_SESSION[$eventos]);
}


header('Location: index.php');


?>