<?php

if(!$_POST){
    header('Location: recive.php');
}
echo $name1 = $_POST['nombre'].'<br>';
echo $name = $_POST['apellido'].'<br>';
echo $name = $_POST['contraseña'].'<br>';
echo $name = $_POST['tipo'].'<br>';
echo $name = $_POST['edad'].'<br>';
echo $name = $_POST['comentarios'].'<br>';
echo $name = $_POST['hidden'].'<br>';
echo $name = $_POST['foto'].'<br>';




?>