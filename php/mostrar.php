<?php


include('db.php');
if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION['usuario'])){
    header("Location:formulario_inicio.php");
}

$usuario = $_SESSION['usuario']; 

$sql = "SELECT * FROM usuarios WHERE usuario='$usuario'";

$resultado = mysqli_query($conexion,$sql);
$row = mysqli_fetch_array($resultado);

$nombre = $row['usuario'];
$id = $row['id_usuario'];
$correo = $row['correo_electronico'];

?>