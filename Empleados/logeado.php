
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
                    <a href="logout.php" class="btn btn-light" >Cerrar sesión</a>
                </div>


            </div>
        </div>
    </nav>
    <?php include_once('../Vistas/contenido.php') ?>
    <?php include_once('../Vistas/footer.php') ?>

    <script>

    </script>
</body>

</html>