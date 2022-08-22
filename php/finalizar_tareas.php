<?php

include("db.php");
include("mostrar.php");

if(isset($_POST['submit'])){

        $decodificador = $id;
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $fecha = $_POST['fecha'];
        $progreso = 'EN CURSO';
    
        $consulta = "DELETE FROM `tareas` WHERE 0";
        
        $resultado= mysqli_query($conexion, $consulta);
    
        if($resultado){
            ?>
                <div>
                    <h1 class="tarea_guardada_correctamente">Tarea finalizada correctamente!</h1>
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