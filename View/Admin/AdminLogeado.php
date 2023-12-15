<?php
include_once('../Usuario/empleados.php');
error_reporting(E_ALL);
session_start();
$correo = $_SESSION['correo'];
if (!isset($correo)) {
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
    <link rel="stylesheet" href="../Assets/Css/AdminLogeado.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <a href="#" class="enlace">
            <img src="../Assets/Images/Logo.png" alt="" class="logo">
        </a>
        <ul>
            <li><a class="active" href="AdminLogeado.php">Home</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle">
                    Opciones
                </a>
                <ul class="dropdown-menu">
                    <li><a href="ListarUsuarios.php">Usuarios</a></li>
                    <li><a href="ProductosCrear.php">Productos</a></li>
                </ul>
            </li>
            <li><a href="LogoutAdmin.php">Cerrar Sesion</a></li>


        </ul>
    </nav>
    <section></section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>