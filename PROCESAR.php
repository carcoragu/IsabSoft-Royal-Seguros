<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];
 
echo "<h2>Informacion recibida desde PHP</h2>";
echo "     ,     ". $nombre ."     ,     ".  $asunto ."     ,     ".  $mensaje . "\n";
 
?>