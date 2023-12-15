<?php
error_reporting(E_ALL);
ini_set('display_error', 1);
require_once("../../Config/conexion.php");

$txtid = isset($_POST['txtid']) ? $_POST['txtid'] : "";
$txtnombre = isset($_POST['txtnombre']) ? $_POST['txtnombre'] : "";
$txtprecio = isset($_POST['txtprecio']) ? $_POST['txtprecio'] : "";
$txtfoto = isset($_FILES['txtfoto']['name']) ? $_FILES['txtfoto']['name'] : "";
$accion = isset($_POST['accion']) ? $_POST['accion'] : "";
$mostrarmodal = false;
$accionAgregar = "";
$AccionModificar = $accionEliminar = $accionCancelar = "disabled";

switch ($accion) {
    case 'abrirRegistro':
        $mostrarmodalRegistro = true;
        break;
    case 'btnagregar':
        $mostrarmodal = false;
        $accionAgregar = "disabled";
        $AccionModificar = $accionEliminar = $accionCancelar = "";
        $sentencia = $pdo->prepare("INSERT INTO productos (nombre, precio,foto) VALUES (:nombre, :precio, :foto)");
        $sentencia->bindParam(':nombre', $txtnombre);
        $sentencia->bindParam(':precio', $txtprecio);
        $nombre_archivo = "";
        if (isset($_FILES['txtfoto']['name']) && $_FILES['txtfoto']['tmp_name'] != "") {
            $fecha = new DateTime();
            $nombre_archivo = $fecha->getTimestamp() . "_" . $_FILES['txtfoto']['name'];
            move_uploaded_file($_FILES['txtfoto']['tmp_name'], "../Assets/Images/" . $nombre_archivo);
        }

        $sentencia->bindParam(':foto', $nombre_archivo);

        try {
            $sentencia->execute();
            header('ListarUsuarios.php');
        } catch (PDOException $e) {
            echo "Error al registrar: " . $e->getMessage();
        }
        break;
        // $fecha = new DateTime();
        // $nombre_archivo = $txtfoto != "" ? $fecha->getTimestamp() . "_" . $_FILES['txtfoto']['name'] : "imagen.png";
        // $tmpfoto = $_FILES['txtfoto']['tmp_name'];
        // if ($tmpfoto != "") {
        //     move_uploaded_file($tmpfoto, "../Imagenes/" . $nombre_archivo);
        // }
        // $sentencia->bindParam(':foto', $nombre_archivo);
        // $sentencia->execute();
        // if ($sentencia) {
        //     echo "Registro guardado!";
        // } else {
        //     echo "Error al registrar!";
        // }
        break;

    case 'btnmodificar':
        error_reporting(E_ALL);
        ini_set('display_error', 1);
        $sentencia = $pdo->prepare("UPDATE productos 
        SET nombre=:nombre, 
        precio=:precio WHERE id=:id");
        $sentencia->bindParam(':nombre', $txtnombre);
        $sentencia->bindParam(':precio', $txtprecio);
        $sentencia->bindParam(':id', $txtid);
        $sentencia->execute();
        $fecha = new DateTime();
        $nombre_archivo = $txtfoto != "" ? $fecha->getTimestamp() . "_" . $_FILES['txtfoto']['name'] : "imagen.png";
        $tmpfoto = $_FILES['txtfoto']['tmp_name'];
        if ($tmpfoto != "") {
            move_uploaded_file($tmpfoto, "../Assets/Images/" . $nombre_archivo);
            $sentencia = $pdo->prepare("SELECT foto FROM productos WHERE id=:id");
            $sentencia->bindParam(":id", $txtid);
            $sentencia->execute();
            $empleado = $sentencia->fetch(PDO::FETCH_ASSOC);
            if (isset($_FILES["txtfoto"])) {
                if (file_exists("../Assets/Images/" . $empleado["foto"])) {
                    unlink("../Assets/Images/" . $empleado["foto"]);
                }
            }
            $sentencia = $pdo->prepare("UPDATE productos SET foto=:foto WHERE id=:id");
            $sentencia->bindParam(':foto', $nombre_archivo);
            $sentencia->bindParam(':id', $txtid);
            $sentencia->execute();
        }
        header('location:ProductosCrear.php');
        break;

    case 'seleccionar':
        $mostrarmodal = true;
        $accionAgregar = "disabled";
        $AccionModificar = $accionEliminar = $accionCancelar = "";
        $sentencia = $pdo->prepare("SELECT * FROM productos WHERE id = :id");
        $sentencia->bindParam(':id', $txtid);
        $sentencia->execute();
        $productos = $sentencia->fetch(PDO::FETCH_LAZY);
        $txtnombre = $productos['nombre'];
        $txtprecio = $productos['precio'];
        $txtfoto = $productos['foto'];

        break;

    case 'btneliminar':
        $sentencia = $pdo->prepare("SELECT foto FROM productos WHERE id=:id");
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
        $img_product = $sentencia->fetch(PDO::FETCH_ASSOC);
        print_r($img_product);
        if (isset($_POST["txtfoto"])) {
            if (file_exists("../Assets/Images/" . $img_product["foto"])) {
                unlink("../Assets/Images/" . $img_product["foto"]);
            }
        }
        $sentencia = $pdo->prepare("DELETE FROM productos WHERE id=:id");
        $sentencia->bindParam(':id', $txtid);
        $sentencia->execute();
        if ($sentencia) {
            header('location: ProductosCrear.php');
        } else {
            echo "Error al eliminar!";
        }
        break;

    case 'btncancelar':
        $txtid = null;
        $txtnombre = null;
        $txtprecio = null;
        $txtfoto = null;
        $accion = null;
        $mostrarmodal = false;
        break;
}

$sentencia = $pdo->prepare("SELECT * FROM productos");
$sentencia->execute();
$listproductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["btnbuscar"]) && !empty($_POST["txtbuscar"])) {
    $searchTerms = '%' . $_POST['txtbuscar'] . '%';
    $sentencia = $pdo->prepare('SELECT * FROM productos WHERE nombre LIKE :searchTerms OR precio LIKE :searchTerms');
    $sentencia->bindParam(':searchTerms', $searchTerms);
    $sentencia->execute();
    $listproductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sentencia = $pdo->prepare("SELECT * FROM productos");
    $sentencia->execute();
    $listproductos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
