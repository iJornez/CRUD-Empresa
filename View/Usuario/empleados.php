<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
require_once("../../Config/conexion.php");

$txtid = isset($_POST['txtid']) ? $_POST['txtid'] : "";
$txtnombres = isset($_POST['txtnombres']) ? $_POST['txtnombres'] : "";
$txtapellidop = isset($_POST['txtapellidop']) ? $_POST['txtapellidop'] : "";
$txtapellidom = isset($_POST['txtapellidom']) ? $_POST['txtapellidom'] : "";
$txtcorreo = isset($_POST['txtcorreo']) ? $_POST['txtcorreo'] : "";
$txtcontrasena = isset($_POST['txtcontrasena']) ? $_POST['txtcontrasena'] : "";
$txtfoto = isset($_FILES['txtfoto']['name']) ? $_FILES['txtfoto']['name'] : "";
$accion = isset($_POST['accion']) ? $_POST['accion'] : "";
$mostrarmodal = false;
$accionAgregar = "";
$AccionModificar = $accionEliminar = $accionCancelar = "disabled";

switch ($accion) {
    case 'btnagregar':
        $sentencia = $pdo->prepare("INSERT INTO empleados (nombres, apellido_p, apellido_m, correo, clave, foto) VALUES (:nombres, :apellido_p, :apellido_m, :correo, :clave, :foto)");
        $sentencia->bindParam(':nombres', $txtnombres);
        $sentencia->bindParam(':apellido_p', $txtapellidop);
        $sentencia->bindParam(':apellido_m', $txtapellidom);
        $sentencia->bindParam(':correo', $txtcorreo);
        $sentencia->bindParam(':clave', $txtcontrasena);
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

        $sentencia = $pdo->prepare("UPDATE empleados 
        SET nombres=:nombres, 
        apellido_p=:apellido_p, 
        apellido_m=:apellido_m, 
        correo=:correo, clave=:clave WHERE id=:id");
        $sentencia->bindParam(':nombres', $txtnombres);
        $sentencia->bindParam(':apellido_p', $txtapellidop);
        $sentencia->bindParam(':apellido_m', $txtapellidom);
        $sentencia->bindParam(':correo', $txtcorreo);
        $sentencia->bindParam(':clave', $txtcontrasena);
        $sentencia->bindParam(':id', $txtid);
        $sentencia->execute();
        $fecha = new DateTime();
        $nombre_archivo = $txtfoto != "" ? $fecha->getTimestamp() . "_" . $_FILES['txtfoto']['name'] : "imagen.png";
        $tmpfoto = $_FILES['txtfoto']['tmp_name'];
        if ($tmpfoto != "") {
            move_uploaded_file($tmpfoto, "../Assets/Images/" . $nombre_archivo);
            $sentencia = $pdo->prepare("SELECT foto FROM empleados WHERE id=:id");
            $sentencia->bindParam(":id", $txtid);
            $sentencia->execute();
            $empleado = $sentencia->fetch(PDO::FETCH_ASSOC);
            if (isset($_FILES["txtfoto"])) {
                if (file_exists("../Assets/Images/" . $empleado["foto"])) {
                    unlink("../Assets/Images/" . $empleado["foto"]);
                }
            }
            $sentencia = $pdo->prepare("UPDATE empleados SET foto=:foto WHERE id=:id");
            $sentencia->bindParam(':foto', $nombre_archivo);
            $sentencia->bindParam(':id', $txtid);
            $sentencia->execute();
        }
        header('location:ListarUsuarios.php');
        break;

    case 'seleccionar':
        $mostrarmodal = true;
        $accionAgregar = "disabled";
        $AccionModificar = $accionEliminar = $accionCancelar = "";
        $sentencia = $pdo->prepare("SELECT * FROM empleados WHERE id = :id");
        $sentencia->bindParam(':id', $txtid);
        $sentencia->execute();
        $empleados = $sentencia->fetch(PDO::FETCH_LAZY);
        $txtnombres = $empleados['nombres'];
        $txtapellidop = $empleados['apellido_p'];
        $txtapellidom = $empleados['apellido_m'];
        $txtcorreo = $empleados['correo'];
        $txtfoto = $empleados['foto'];
        $txtcontrasena = $empleados['clave'];

        break;

    case 'btneliminar':
        $sentencia = $pdo->prepare("SELECT foto FROM empleados WHERE id=:id");
        $sentencia->bindParam(":id", $txtid);
        $sentencia->execute();
        $empleado = $sentencia->fetch(PDO::FETCH_ASSOC);
        print_r($empleado);
        if (isset($_POST["txtfoto"])) {
            if (file_exists("../Assets/Images/" . $empleado["foto"])) {
                unlink("../Assets/Images/" . $empleado["foto"]);
            }
        }
        $sentencia = $pdo->prepare("DELETE FROM empleados WHERE id=:id");
        $sentencia->bindParam(':id', $txtid);
        $sentencia->execute();
        if ($sentencia) {
            header('location: ListarUsuarios.php');
        } else {
            echo "Error al eliminar!";
        }
        break;

    case 'btncancelar':
        $txtid = null;
        $txtnombres = null;
        $txtapellidop = null;
        $txtapellidom = null;
        $txtcorreo = null;
        $txtcontrasena = null;
        $txtfoto = null;
        $accion = null;
        break;
}

$sentencia = $pdo->prepare("SELECT * FROM empleados");
$sentencia->execute();
$listaempleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);


if (isset($_POST["btnbuscar"]) && !empty($_POST["txtbuscar"])) {
    $searchTerms = '%' . $_POST['txtbuscar'] . '%';
    $sentencia = $pdo->prepare('SELECT * FROM empleados WHERE nombres LIKE :searchTerms OR apellido_p LIKE :searchTerms OR apellido_m LIKE :searchTerms OR correo LIKE :searchTerms OR clave LIKE :searchTerms');
    $sentencia->bindParam(':searchTerms', $searchTerms);
    $sentencia->execute();
    $listaempleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
} else {
    $sentencia = $pdo->prepare("SELECT * FROM empleados");
    $sentencia->execute();
    $listaempleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
}
