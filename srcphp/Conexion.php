<?php
$servidor="localhost";
$db="rincon_de_las_brujas";
$username="root";
$password="123";

try{
    $conexion= new PDO("mysql:host=$servidor;bdname=$db",$username,$password);
    echo "conexion exitosa";
}catch(Exception $e){
    echo $e->getMessage();
}
