<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="../img/brand.ico">   <!-- esto queda por resolver, es el icono de la pestaña -->

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/estilos_home.css" >

    <!--import navbar -->
    <?php include('../inc/navbar.php'); ?>
    <?php include("finalizar_tareas.php"); ?>
    <?php include("finalizar_tarea_logica.php"); ?>
    
    
    <title>Administrador - Mis tareas</title>
</head>

<header>
        <!-- Menu de navegacion -->
        <?php navbar(); ?>
    </header>

<body>
    
    <div class="contenedor-tareas-diarias">
    
        <div class=header-mistareas>
            <h1 class=title-agrega>MIS TAREAS</h1>
        </div>
    
        <div class="div-tareas_individuales">
            
            <?php include('mostrar_tareas.php'); ?>
        </div>
        <br><br><br><br><br><br>
    </div>


</body>
<footer>
    <p>Copyright damsh & santh project 2021 @APPWEB2021</p>
</footer>
</html>