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
    $_SESSION['usuario'] = $correo;
    header("location:logeado.php");
    exit();
} else {
    header("location:index.php?error=1");
    exit();
}
