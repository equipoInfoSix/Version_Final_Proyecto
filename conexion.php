<?php

$conexion = null;
$servidor = 'localhost';
$bd = 'id20709715_producto';
$user = 'id20709715_root';
$pass = '5547168870La/';
try{
    $conexion = new PDO('mysql:host='.$servidor. ';dbname='.$bd, $user, $pass);
}catch(PDOException $e){
    echo "Error de conexion!";
    exit;
}
return $conexion;
?> 