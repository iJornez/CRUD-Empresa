<?php
require_once('empleados.php') ;

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>PAGINA-CRUD</title>
</head>

<body>
    <nav style="background-color: #000000;" class=" navbar navbar-expand-lg navbar-dark">

        <a class="navbar-brand" href="index.php"><img src="../Imagenes/Logo.jpg" height="50px" width="50px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <button class="btn btn-light ms-2" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</button>
            <button class="btn btn-light ms-2" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</button>
            <a href="../Admin/admin.php" class="btn btn-light ms-2">Admin</a>
        </div>

    </nav>
    <?php include_once('../Vistas/contenido.php') ?>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form action="verificacion.php" method="post">

                        <div class="mb-3">
                            <label for="email">
                                <p class="text form-label">Correo</p>
                            </label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su usuario">
                        </div>

                        <div class="mb-3">
                            <label for="contraseña">
                                <p class="text form-label">Contraseña</p>
                            </label>
                            <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingrese su contraseña" aria-label="First name">
                        </div>

                        <br>

                        <button type="submit" class="btn btn-dark">Ingresar</button>

                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->


    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form>
                        <?php require_once('../Empleados/registro.php') ?>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include_once('../Vistas/footer.php') ?>




    <script>
        $(document).ready(function() {
            if (!localStorage.getItem('modalShown')) {
                $('#loginModal').modal('show');
                localStorage.setItem('modalShown', 'true');
            }
        });
    </script>
</body>

</html>