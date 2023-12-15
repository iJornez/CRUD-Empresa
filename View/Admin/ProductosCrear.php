<?php
require_once('AccionesProductos.php');
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../Assets/Css/AdminLogeado.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
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
                <a class="dropdown-toggle">
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
    <section>
        <div class="container">
            <center>

                <h1 class="text-center">Lista de Productos</h1><br>

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
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Registro de Productos</h1>
                                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <div class="form_group col-md-12">
                                        <label for="" class="blockquote">ID</label>
                                        <input type="number" class="form-control" name="txtid" id="txtid" value="<?php echo "$txtid"; ?>" id="id" require="" disabled><br>
                                    </div>

                                    <div class="form_group col-md-12">
                                        <label for="" class="blockquote">NOMBRE</label>
                                        <input type="text" class="form-control" name="txtnombre" id="txtnombre" value="<?php echo "$txtnombre"; ?>" require=""><br>
                                    </div>

                                    <div class="form_group col-md-12">
                                        <label for="" class="blockquote">Precio</label>
                                        <input type="text" class="form-control" name="txtprecio" id="txtprecio" value="<?php echo "$txtprecio"; ?>" require=""><br>
                                    </div>


                                    <div class="form_group col-md-12">
                                        <label for="" class="blockquote">FOTO</label>
                                        <?php if ($txtfoto != "") { ?>
                                            <br>
                                            <img class="img-thumbnail rounded mx-auto d-block" width="100px" src="../Assets/Images/<?php echo $txtfoto; ?>">
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

                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="text-center">Id</th>
                                <th scope="col" class="text-center">Foto</th>
                                <th scope="col" class="text-center">Nombre</th>
                                <th scope="col" class="text-center">Precio</th>
                                <th scope="col" class="text-center">Acciones</th>

                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <?php foreach ($listproductos as $producto) { ?>
                                <tr>
                                    <td class="text-center"><?php echo $producto['id']; ?></td>
                                    <td class="text-center"><img class="img-thumbnail" width="30px" src="../Assets/Images/<?php echo $producto['foto']; ?>"></td>
                                    <td class="text-center"><?php echo $producto['nombre']; ?></td>
                                    <td class="text-center"><?php echo $producto['precio']; ?></td>

                                    <form action="" method="post">
                                        <input type="hidden" name="txtid" value="<?php echo $producto['id']; ?>">
                                        <!-- <input type="hidden" name="txtfoto" value="<?php echo $$producto['foto']; ?>">
                                        <input type="hidden" name="txtnombre" value="<?php echo $producto['nombre']; ?>">
                                        <input type="hidden" name="txtprecio" value="<?php echo $producto['precio']; ?>"> -->
                                        
                                        <td class="text-center"><input class="btn btn-primary btn-sm me-3" type="submit" name="accion" value="seleccionar"><button type="submit" name="accion" class="btn btn-danger btn-sm me-3" value="btneliminar">Eliminar</button></td>

                                    </form>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>

            </center>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            <?php if ($mostrarmodal) { ?>
                $('#exampleModal').modal('show');
            <?php } ?>
        });
    </script>
    </section>
</body>

</html>