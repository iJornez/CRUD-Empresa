<?php

require_once("../Conexion/conexion.php");
session_start();
$usuario=$_SESSION['admin'];
if (!isset($usuario)) {
   header('location:../Admin/admin.php');
   exit;
}


$correo = (isset($_POST['email'])) ? $_POST['email'] : "";
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : "";


$sentencia = $pdo->prepare("SELECT correo, clave FROM usuario WHERE correo = :correo AND clave = :clave");
$sentencia->bindParam(':correo', $correo);
$sentencia->bindParam(':clave', $clave);
$sentencia->execute();
$verificado = $sentencia->fetch();


if ($verificado) {
    header("location:logeado.php");
} else {
    header("location:index.php?error=1");
}
