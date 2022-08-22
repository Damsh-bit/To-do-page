<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="../img/brand.ico">   <!-- esto queda por resolver, es el icono de la pestaña -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/estilos_home.css" >
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!--import navbar -->
    <?php include('../inc/navbar.php'); ?>
    
    <title>Administrador - Tareas Finalizadas</title>
</head>
<body class="container-fluid">
    <header>
        <!-- Menu de navegacion -->
        <?php navbar(); ?>
    </header>
    <div class="contenedor">
        <div class=header-fin>
            <h1 class=title-agrega>TAREAS FINALIZADAS</h1>
        </div>
    </div>
    <div class="contenedor-tareas">
     <div class="div-tareas_individuales">
        <?php include ("mostrar_tareas_finalizadas.php"); ?>
     </div>
     <br><br><br><br><br><br>
    </div>

</body>
<footer>
            <p>Copyright damsh & santh project 2021 @APPWEB2021</p>
        </footer>
</html>