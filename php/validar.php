<?php
include('db.php');
$usuario=$conexion->real_escape_string($_POST['usuario']);
$contraseña=$conexion->real_escape_string(md5($_POST['contraseña']));

session_start();

$_SESSION['usuario']=$usuario;



$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:index.php");
}else{
    ?>
    <?php
    include("formulario_inicio.php");
    ?>
    <div class="bad">
        <h1 class = "error_logeo">Usuario o contraseña ingresados son incorrectos</h1>
    </div>
    
    <?php
}


mysqli_free_result($resultado);
mysqli_close($conexion);
