<?php

if(!$_POST){
    header('Location: recive.php');
}
$operacion = $_POST['operacion'];
for ($i = 0; $i<=$operacion;$i++){
    echo 'Escribiendo '.$operacion.' líneas'.'<br>';
}
?>
