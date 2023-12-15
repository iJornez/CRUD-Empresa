<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="stylesheet" href="../Assets/Css/Carrito.css">

</head>

<body>
    <section class="container">
        <div class="products">
            <div class="carts">
                <div>
                    <img src="../Assets/Images/drone.jpg" alt="">
                    <p><span>20</span>$</p>
                </div>
                <p class="title">Tempest Cataclysm Combo 3 En 1 Gaming Teclado</p>
                <a href="" data-id="1" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-2.jpg" alt="">
                    <p><span>35</span>$</p>
                </div>
                <p class="title"> Newskill Suiko Ivory Teclado Mecánico Gaming Full RGB</p>
                <a href="" class="btn-add-cart" data-id="2">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-3.jpg" alt="">
                    <p><span>15.50</span>$</p>
                </div>
                <p class="title"> Aukey KM-G16 Teclado Mecánico Gaming Retroiluminado</p>
                <a href="" data-id="3" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-4.jpg" alt="">
                    <p><span>20.20</span>$</p>
                </div>
                <p class="title"> Razer Huntsman Elite Teclado Mecánico Gaming RGB</p>
                <a href="" data-id="4" class="btn-add-cart">Agregar al carrito</a>
            </div>
        </div>
    </section>

    <script>
        function showCart(x) {
            document.getElementById("products-id").style.display = "block";
        }

        function closeBtn() {
            document.getElementById("products-id").style.display = "none";
        }
    </script>
    <script src="../Assets/Js/Carrito.js"></script>
</body>

</html>