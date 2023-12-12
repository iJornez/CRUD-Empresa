<?php

require_once("../Conexion/conexion.php");
session_start();



$correo = (isset($_POST['email'])) ? $_POST['email'] : "";
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : "";


$sentencia = $pdo->prepare("SELECT correo, clave FROM usuario WHERE correo = :correo AND clave = :clave");
$sentencia->bindParam(':correo', $correo);
$sentencia->bindParam(':clave', $clave);
$sentencia->execute();
$verificado = $sentencia->fetch();


if ($verificado) {
    $_SESSION['correo']=$correo;
    header("location:logeado.php");
} else {
    header("location:index.php?error=1");
}
