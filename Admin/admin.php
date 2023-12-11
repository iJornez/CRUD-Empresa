<?php 

require_once('../Empleados/empleados.php'); 

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../Empleados/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body>
    <nav style="background-color: #000000;" class=" navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="../Empleados/index.php"><img src="../Imagenes/Logo.jpg" height="50px" width="50px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../Empleados/index.php">Home</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="card mt-4 mb-4">
        <div class="card-body text-align-center">
            <form action="verificacion_admin.php" method="post">

                <div class="mb-3">
                    <label for="email">
                        <p class="text form-label">Correo</p>
                    </label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su usuario">
                </div>

                <div class="mb-3" >
                    <label for="contraseña">
                        <p class="text form-label">Contraseña</p>
                    </label>
                    <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingrese su contraseña" aria-label="First name">
                </div>

                <br>

                <button type="submit" class="btn btn-dark">Ingresar</button>
                <button class="btn btn-dark ms-2" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</button>

            </form>
        </div>
    </div>



    <!--Modal Registrar-->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="../Empleados/empleados.php" method="post">
                        <?php require_once('../Empleados/registro.php') ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include('../Vistas/footer.php') ?>
</body>

</html>