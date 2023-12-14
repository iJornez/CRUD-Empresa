<?php

include_once('empleados.php');
session_start();
$usuario = $_SESSION['correo'];

if (!isset($usuario)) {
    header('location: HomeUsuario.php');
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
    <link rel="stylesheet" href="../../Assets/Css/LoginUsuario.css">
    <link rel="stylesheet" href="../../Assets/Css/Carrito.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>PAGINA-CRUD</title>
</head>

<body>
    <nav style="background-color: #000000;" class=" navbar navbar-expand-lg navbar-dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="HomeUsuario.php"><img src="../../Assets/Images/Logo.jpg" height="50px" width="50px" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                </ul>
                <div class="d-flex align-items-center">

                    <span class=" m-2 me-3 text-light d-flex align-items-center">
                        <i class="fa fa-cart-plus" onclick="showCart(this)"></i>
                        <p class="count-product">0</p>
                    </span>

                    <a href="LogoutUsuario.php" class="btn btn-light">Cerrar sesión</a>
                </div>


            </div>
        </div>
    </nav>
    <div class="cart-container">
        <div>

        </div>
        <div class="cart-products" id="products-id">
            <p class="close-btn" onclick="closeBtn()">X</p>
            <h3>Mi carrito</h3>
            <div class="card-items">
            </div>
            <h2>Total: $<strong class="price-total">0</strong></h2>
            <button class="btn btn-primary mt-3" id="buyButton">Comprar</button>
        </div>
    </div>
    <?php include_once('../../Partials/contenido.php') ?>
    <?php include_once('../../Partials/footer.php') ?>

    <script src="../../Assets/Js/Carrito.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const addToCartButtons = document.querySelectorAll('.btn-add-cart');

            document.getElementById('buyButton').addEventListener('click', function() {
                if (buyThings.length === 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: '¡Carrito vacío!',
                        text: 'Agrega productos al carrito antes de comprar.',
                    });
                } else {
                    Swal.fire({
                        icon: 'success',
                        title: '¡Compra realizada!',
                        text: 'Gracias por su compra.',
                    });
                }
                buyThings = [];
                totalCard = 0;
                countProduct = 0;
                loadHtml();
            });
            <?php if (isset($_SESSION['bienvenida'])) : ?>
                Swal.fire({
                    icon: 'info',
                    title: '<?php echo $_SESSION['bienvenida']; ?>',
                    text: '¡Esperamos que disfrutes tu experiencia de compra!',
                });
                <?php unset($_SESSION['bienvenida']); ?>
            <?php endif; ?>
        });
    </script>
</body>

</html>