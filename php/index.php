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
    <?php include("mostrar.php");?>

    <title>Administrador - Inicio</title>

</head>
    
    <header>
        <!-- Menu de navegacion -->
        <?php navbar(); ?>
    </header>
    

<body >

    <div class="contenedor-tareas-diarias">

        <div class="header-index">
            <h1 class=title-agrega>INICIO</h1>
        </div>

        <div class="Cartel-Usuario">
            <h1>¡Bienvenido <?php echo $nombre; ?>!</h1> 
            <br>
                 
        </div>
        <?php include("index_tareas.php"); ?>

        <br><br><br><br><br>

    </div>
        
</body>
<footer>
            <p>Copyright damsh & santh project 2021 @APPWEB2021</p>
        </footer>
</html>