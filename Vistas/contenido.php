<?php 
$laptop = 20000;
$smartphone = 20000;
$auriculares = 20000;
$tableta = 20000;
$camara = 20000;
$drone = 20000;
?>

<div class="container">
    <div style="margin-top: 30px;" class="row">
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <img src="../Imagenes/laptop.jpg" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Laptop Ultradelgada XYZ</h5>
                    <p class="card-text">Una laptop ultradelgada y potente que ofrece rendimiento y portabilidad.</p>
                    <p class="card-text"><?php echo('$'.$laptop)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <img src="../Imagenes/smartphone.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Smartphone ABC Pro</h5>
                    <p class="card-text"> Un teléfono inteligente de alta gama con una cámara excepcional y rendimiento óptimo.</p>
                    <p class="card-text"><?php echo('$'.$smartphone)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <img src="../Imagenes/auriculares.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Auriculares Inalámbricos DEF</h5>
                    <p class="card-text">Auriculares inalámbricos con cancelación de ruido y calidad de audio premium.</p>
                    <p class="card-text"><?php echo('$'.$auriculares)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <img src="../Imagenes/tableta.jpg" class="card-img-top" alt="Product 1">
                <div class="card-body">
                    <h5 class="card-title">Tableta táctil XYZ Plus</h5>
                    <p class="card-text">Una tableta táctil avanzada con pantalla de alta resolución y gran capacidad de almacenamiento.</p>
                    <p class="card-text"><?php echo('$'.$tableta)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <img src="../Imagenes/camara.jpg" class="card-img-top" alt="Product 2">
                <div class="card-body">
                    <h5 class="card-title">Cámara Digital ABC</h5>
                    <p class="card-text">Una cámara digital profesional con múltiples modos de disparo y grabación de alta calidad.</p>
                    <p class="card-text"><?php echo('$'.$camara)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="card" style="width: 18rem;">
                <img src="../Imagenes/drone.jpg" class="card-img-top" alt="Product 3">
                <div class="card-body">
                    <h5 class="card-title">Drone DEF Explorer</h5>
                    <p class="card-text">Un drone compacto con cámara 4K y funciones avanzadas de vuelo autónomo.</p>
                    <p class="card-text"><?php echo('$'.$drone)?></p>
                    <a href="#" class="btn btn-primary">Comprar</a>
                </div>
            </div>
        </div>
    </div>
</div>