<?php
require_once('empleados.php');
session_start();
$usuario = $_SESSION['admin'];
if (!isset($usuario)) {
    header('location:../Admin/admin.php');
    exit;
}
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
    <title>CRUD de Empleados MYSQL Y PHP</title>
</head>

<body>
    <nav style="background-color: #000000;" class=" navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="../Imagenes/Logo.jpg" height="50px" width="50px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>

                </ul>
                <div class="d-flex align-items-center">
                    <span class=" m-2 me-5 text-light">
                        <i class="fas fa-user"></i>
                        <p class="mb-0 me-3">Bienvenido</p>
                    </span>
                    <a href="../Admin/logoutAdmin.php" class="btn btn-light ms-2">Cerrar sesión</a>
                </div>

            </div>
        </div>
    </nav>

    <div class="container">
        <center>

            <h1>Lista de Usuarios</h1><br>

            <div class="buscar">
                <form action="" method="post">
                    <label for="txtbuscar">Buscar:</label>
                    <input type="text" name="txtbuscar" id="txtbuscar">
                    <button type="submit" name="btnbuscar" class="btn btn-primary">Buscar</button>
                    <button type="submit" name="btncancelar" class="btn btn-danger">Cancelar</button>
                </form>
            </div><br>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Clientes</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                </div>

                                <div class="form_group col-md-12">
                                    <label for="" class="blockquote">IDENTIFICACION</label>
                                    <input type="number" class="form-control" name="txtid" id="txtid" value="<?php echo "$txtid"; ?>" id="id" require=""><br>
                                </div>

                                <div class="form_group col-md-12">
                                    <label for="" class="blockquote">NOMBRES</label>
                                    <input type="text" class="form-control" name="txtnombres" id="txtnombres" value="<?php echo "$txtnombres"; ?>" require=""><br>
                                </div>

                                <div class="form_group col-md-12">
                                    <label for="" class="blockquote">PRIMER APELLIDO</label>
                                    <input type="text" class="form-control" name="txtapellidop" id="txtapellidop" value="<?php echo "$txtapellidop"; ?>" require=""><br>
                                </div>

                                <div class="form_group col-md-12">
                                    <label for="" class="blockquote">SEGUNDO APELLIDO</label>
                                    <input type="text" class="form-control" name="txtapellidom" id="txtapellidom" value="<?php echo "$txtapellidom"; ?>" require=""><br>
                                </div>
                                <br>

                                <div class="form_group col-md-12">
                                    <label for="" class="blockquote">CORREO</label>
                                    <input type="text" class="form-control" name="txtcorreo" id="txtcorreo" value="<?php echo "$txtcorreo"; ?>" require=""><br>
                                </div>
                                <br>

                                <div class="form_group col-md-12">
                                    <label for="" class="blockquote">FOTO</label>
                                    <?php if ($txtfoto != "") { ?>
                                        <br>
                                        <img class="img-thumbnail rounded mx-auto d-block" width="100px" src="../Imagenes/<?php echo $txtfoto; ?>">
                                        <br>
                                        <br>
                                    <?php } ?>
                                    <input type="file" accept="image/*" class="form-control" name="txtfoto" id="txtfoto" value="<?php echo "$txtfoto"; ?>" require=""><br>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" name="accion" class="btn btn-success" id="btnagregar" value="btnagregar">Agregar</button>
                                    <button type="submit" name="accion" class="btn btn-primary" value="btnmodificar">Modificar</button>
                                    <button type="submit" name="accion" class="btn btn-warning" value="btncancelar">Cancelar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nombre completo</th>
                            <th>Correo</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listaempleados as $empleado) { ?>
                            <tr>
                                <td><img class="img-thumbnail" width="100px" src="../Imagenes/<?php echo $empleado['foto']; ?>"></td>
                                <td><?php echo $empleado['nombres']; ?> <?php echo $empleado['apellido_p']; ?> <?php echo $empleado['apellido_m']; ?></td>
                                <td><?php echo $empleado['correo']; ?></td>

                                <form action="" method="post">
                                    <input type="hidden" name="txtid" value="<?php echo $empleado['id']; ?>">
                                    <!-- <input type="hidden" name="txtnombres" value="<?php echo $empleado['nombres']; ?>">
                        <input type="hidden" name="txtapellidop" value="<?php echo $empleado['apellido_p']; ?>">
                        <input type="hidden" name="txtapellidom" value="<?php echo $empleado['apellido_m']; ?>">
                        <input type="hidden" name="txtcorreo" value="<?php echo $empleado['correo']; ?>">
                        <input type="hidden" name="txtfoto" value="<?php echo $empleado['foto']; ?>">  -->
                                    <td><input class="btn btn-primary" type="submit" name="accion" value="seleccionar"></td>
                                    <td><button type="submit" name="accion" class="btn btn-danger" value="btneliminar">Eliminar</button></td>
                                </form>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        </center>
    </div>

    <?php include_once('../Vistas/footer.php') ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            <?php if ($mostrarmodal) { ?>
                $('#exampleModal').modal('show');
            <?php } ?>
        });
    </script>
</body>

</html>