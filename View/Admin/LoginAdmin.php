<?php

require_once('../Usuario/empleados.php');
session_start();

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/x-icon" href="/assets/logo-vt.svg" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <style>
        body {
            background-image: url('../../Assets/Images/fondo.jpg');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="bg-white p-5 rounded-5 text-secondary shadow" style="width: 25rem">

        <div class="d-flex justify-content-center">
            <img src="../../Assets/Images/login-icon.svg" alt="login-icon" style="height: 7rem" />
        </div>

        <div class="text-center fs-1 fw-bold">Admin</div>

        <form action="VerificacionAdmin.php" method="post">
            <div class="input-group mt-4">
                <div class="input-group-text bg-info">
                    <img src="../../Assets/Images/username-icon.svg" alt="username-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="text" placeholder="Username" name="email" required />
            </div>

            <div class="input-group mt-1">
                <div class="input-group-text bg-info">
                    <img src="../../Assets/Images/password-icon.svg" alt="password-icon" style="height: 1rem" />
                </div>
                <input class="form-control bg-light" type="password" placeholder="Password" name="clave" required />
            </div>

            <div class="d-flex justify-content-around mt-1">
                <div class="d-flex align-items-center gap-1">
                    <!-- Posible contenido adicional -->
                </div>
            </div>
            <button type="submit" class="btn btn-info text-white w-100 mt-4 fw-semibold shadow-sm">Iniciar Sesion</button>
        </form>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>