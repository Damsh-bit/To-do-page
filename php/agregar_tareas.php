<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../img/brand.ico">   

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../css/estilos_home.css" >
    <link href="../css/bootstrap.min.css" rel="stylesheet">


    <!--import navbar -->
    <?php include('../inc/navbar.php'); ?>
    
    <title>Administrador - Agregar Tareas</title>
</head>
<body class="container-fluid">
    <header>
        <!-- Menu de navegacion -->
        <?php navbar(); ?>
    </header>
    
    <div class="contenedor">
        
        <div class=header-add>
            <h1 class=title-agrega>AGREGÁ UNA TAREA</h1>
           <!-- <hr class="linea-add" size=3 width="1125"> -->
            
        </div>

        <div class=div-addtareas>
                        
            <div class=formulario_add>

                <form class="form-add" method="POST">

                    <div class=title>
                        <h1>¿Que tienes que hacer?</h1>
                    </div>

                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo" maxlength="70" placeholder="Ingresar titulo" required>                 

                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="text" name="descripcion" rows="10" cols="68" maxlength="500" placeholder="Escribe tu tarea (max 500 caracteres)" required></textarea>
                    
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="fecha" name="fecha" id="fecha" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
                    <br>
                    <button type="submit" name="submit" class="btn btn-success">Agregar</button>
                    
                    <?php
                         include("guardar_tareas.php");
                    ?>
                </form>
                <br><br><br><br><br><br>

                
        </div>
        
    </div>     

</body>

    <footer>
    <p>Copyright damsh & santh project 2021 @APPWEB2021</p>      
    </footer>
</html>