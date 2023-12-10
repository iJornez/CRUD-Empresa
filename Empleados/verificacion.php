<?php

include("../Conexion/conexion.php");

$correo = (isset($_POST['email'])) ? $_POST['email'] : "";
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : "";


$sentencia = $pdo->prepare("SELECT correo, clave FROM usuario WHERE correo = :correo AND clave = :clave");
$sentencia->bindParam(':correo', $correo);
$sentencia->bindParam(':clave', $clave);
$sentencia->execute();
$verificado = $sentencia->fetch();


if ($verificado) {
    header("location:dashboard.php");
} else {
    header("location:index.php");
}
