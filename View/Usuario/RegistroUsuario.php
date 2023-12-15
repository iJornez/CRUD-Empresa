<?php include_once('empleados.php') ?>

<form action="" method="post" enctype="multipart/form-data">
    
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
        <label for="" class="blockquote">CONTRASEÑA</label>
        <input type="text" class="form-control" name="txtcorreo" id="txtcontrasena" value="<?php echo "$txtcontrasena"; ?>" require=""><br>
    </div>
    <br>

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
        <button type="submit" name="accion" class="btn btn-success" id="btnagregar" value="btnagregar">Registrarse</button>
    </div>
</form>