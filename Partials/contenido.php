<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/svg+xml" href="./images/favicon.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart Js</title>
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
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-5.jpg" alt="">
                    <p><span>19</span>$</p>
                </div>
                <p class="title"> Trust GXT 856 Torac Teclado Metálico Gaming RGB</p>
                <a href="" data-id="5" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-1.jpg" alt="">
                    <p><span>45</span>$</p>
                </div>
                <p class="title"> MSI Vigor GK30 Teclado Gaming RGB</p>
                <a href="" data-id="6" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-2.jpg" alt="">
                    <p><span>23.99</span>$</p>
                </div>
                <p class="title"> Genesis Thor 300 RGB Teclado Mecánico Gaming RGB Switch Rojo</p>
                <a href="" data-id="7" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-3.jpg" alt="">
                    <p><span>50</span>$</p>
                </div>
                <p class="title"> Mars Gaming MKXTKL Teclado Mecánico Gaming RGB</p>
                <a href="" data-id="8" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-4.jpg" alt="">
                    <p><span>16</span>$</p>
                </div>
                <p class="title"> Trust GXT 881 Odyss Teclado Gaming Semi-Mecánico RGB</p>
                <a href="" data-id="9" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-5.jpg" alt="">
                    <p><span>17.50</span>$</p>
                </div>
                <p class="title"> Krom Krusher Teclado Gaming Híbrido RGB + Ratón</p>
                <a href="" data-id="10" class="btn-add-cart">Agregar al carrito</a>
            </div>
            <div class="carts">
                <div>
                    <img src="../Assets/Images/keyboard-1.jpg" alt="">
                    <p><span>45</span>$</p>
                </div>
                <p class="title"> Corsair K55 RGB PRO XT Teclado Gaming Retroiluminado Negro</p>
                <a href="" data-id="11" class="btn-add-cart">Agregar al carrito</a>
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