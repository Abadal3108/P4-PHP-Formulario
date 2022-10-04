<?php
if(!$_POST){
    header('Location: recive.php');
}
$nombre = $_POST['nombre'];
echo "tiene ".strlen($nombre)." letras ".$nombre;
?>
