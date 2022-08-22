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
    
    <title>Administrador - Modificar Tareas</title>
</head>
<body class="container-fluid">
    <header>
        <!-- Menu de navegacion -->
        <?php navbar(); ?>
    </header>
    
    <div class="contenedor">

        <?php
        $id_tarea = $_GET['id_tarea'];
        $titulo = $_GET['titulo'];
        $descripcion = $_GET['descripcion'];
        ?>

        <div class=header-act>
            <h1 class=title-agrega>MODIFICÁ UNA TAREA</h1>
            
        </div>

        <div class=div-addtareas>
                        
            <div class=formulario_add>

                <form class="form-add" action="actualizar.php?<?php echo 'id_tarea='.$id_tarea ?>" method="POST">

                    <div class=title>
                        <h1>¿Que quieres cambiar?</h1>
                    </div>
                    
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="titulo-modificado" maxlength="70" placeholder="<?php echo $titulo?>" required>                 

                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="text" name="descripcion-modificada" rows="10" cols="68" maxlength="500" placeholder="<?php echo $descripcion?>" required></textarea>
                    
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="fecha" name="fecha-modificada" id="fecha" placeholder="Introduce una fecha" required min=<?php $hoy=date("Y-m-d"); echo $hoy;?> />
                    <br>
                    <input type="submit" class='btn_mod'  value="Modificar button">

                </form>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

                
        </div>
        
    </div>     

</body>

    <footer>
        <br>
        <p>Copyright damsh y santh 2021 @</p>
        <br>
    </footer>
</html>