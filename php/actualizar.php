<?php

include("db.php");
include("mostrar.php");

    if($_GET['id_tarea']){

        $id_tarea_modificar = $_GET['id_tarea'];
        $titulo = $_POST['titulo-modificado'];
        $descripcion = $_POST['descripcion-modificada'];
        $fecha = $_POST['fecha-modificada'];
        
    
        $consulta = "UPDATE tareas SET titulo='$titulo',desc_tarea='$descripcion',fecha='$fecha' WHERE id_tarea='$id_tarea_modificar'";
        
        $resultado= mysqli_query($conexion, $consulta);
    
        if($resultado){
            ?>
                <div>
                    <h1 class="tarea_guardada_correctamente">Tarea actualizada correctamente!</h1>
                    <?php header("Location:mis_tareas.php"); ?> 
                </div>               
            <?php
        }else{
            ?>
            <?php
            include("agregar_tareas.php");
            ?>
            <div class="bad">
                <h1 class = "error_logeo">Hubo un error, intentalo otra vez!</h1>
            </div>
            
            <?php
        }     

    }


    mysqli_close($conexion);


?>