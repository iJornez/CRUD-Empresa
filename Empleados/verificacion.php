<?php

require_once("../Conexion/conexion.php");
session_start();



$correo = (isset($_POST['email'])) ? $_POST['email'] : "";
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : "";


$sentencia = $pdo->prepare("SELECT correo, clave FROM usuarios WHERE correo = :correo AND clave = :clave");
$sentencia->bindParam(':correo', $correo);
$sentencia->bindParam(':clave', $clave);
$sentencia->execute();
$verificado = $sentencia->fetch();


if ($verificado) {
    $_SESSION['correo']=$correo;
    echo "aquiii";
} else {
    header("location:index.php?error=1");
}
