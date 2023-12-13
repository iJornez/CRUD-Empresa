<?php
include_once('../Usuario/empleados.php');
session_start();
$usuario = $_SESSION['correo'];

if (!isset($usuario)) {
    header('location: LoginAdmin.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Assets/Css/AdminLogeado.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="../../Assets/Images/Logo.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="#">Home</a></li>
            <li><a href="#">Usuarios</a></li>
            <li><a href="VerificacionAdmin.php">Cerrar Sesion</a></li>


        </ul>
    </nav>
    <section></section>
</body>

</html>