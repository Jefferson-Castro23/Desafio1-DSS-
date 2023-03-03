<?php
//Se selecciona la clase que se necesita 
require('usuario.class.php');
require_once('eventos.class.php');


$identificador = "";
$usuario = "";

if(!isset($_SESSION['usuario'])){
    header("Location: login.php");
    exit();
}

if($_SESSION['usuario'] == "CheGuebara200"){
    $identificador = "1";
}else if($_SESSION['usuario'] == "PaolitaFresa254"){
    $identificador = "2";
}else if($_SESSION['usuario'] == "MarFigue145"){
    $identificador = "3";
}
echo "Bienvenido " . $_SESSION['usuario'] . " a su aplicacion de eventos importantes<br><br><br>";

?>

<form action="agregar_evento.php" method="post">
    <label for="nombre">Titulo del evento:</label>
    <input type="text" name="titulo" required>

    <label for="fecha">Fecha del evento:</label>
    <input type="date" name="fecha" required>

   

    <label for="lugar">Lugar del evento:</label>
    <input type="text" name="lugar" required>

    <label for="lugar">Descripcion del evento:</label>
    <input type="text" name="descripcion" required>

    <input type="submit" value="Agregar evento">
   
</form>



<?php
require_once('eventos.class.php');
$eventos = $_SESSION[SESION_EVENTOS][ARREGLO_EVENTOS];

echo '<table>';
echo '<tr><th>Titulo</th><th>Fecha</th><th>Lugar</th><th>Descripcion del evento</th></tr>';

foreach ($eventos as $evento) {
    echo '<tr>';
    echo '<td>' . $evento->titulo . '</td>';
    echo '<td>' . $evento->fecha . '</td>';
    echo '<td>' . $evento->lugar . '</td>';
    echo '<td>' . $evento->descripcion . '</td>';

}


?>