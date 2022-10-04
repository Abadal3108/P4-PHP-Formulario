<?php
if(!$_POST){
    header('Location: recive.php');
}
$operacion = $_POST['operacion'];
echo $operacion . '<br>';
eval("\$operacion = $operacion;");
echo $operacion;
?>
