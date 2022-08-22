<?php

include("db.php");
include("mostrar.php");


        if($_GET['id_tarea']){

            $id_tarea_a_finalizar = $_GET['id_tarea'];

            $consulta_seleccionar = "SELECT * FROM tareas where id_tarea='$id_tarea_a_finalizar'";

        $resultado_seleccionar = mysqli_query($conexion, $consulta_seleccionar);
        While($row2 = mysqli_fetch_array($resultado_seleccionar)){
            $id_tarea = $row2['id_tarea'];
            $id_user = $row2['decodificador'];
            $titulo = $row2['titulo'];
            $descripcion = $row2['desc_tarea'];
            $fecha = $row2['fecha'];
            $progreso = "FINALIZADA";
        }        
        

        $consulta_finalizar_tarea = "INSERT INTO tareas_finalizadas(id_tarea, decodificador, titulo, desc_tarea, fecha, progreso) VALUES ('$id_tarea', '$id_user','$titulo','$descripcion','$fecha','$progreso')";
        $resultado_finalizar_tarea = mysqli_query($conexion, $consulta_finalizar_tarea);
        $consulta = "DELETE FROM tareas WHERE id_tarea = '$id_tarea_a_finalizar'";
        
        $resultado= mysqli_query($conexion, $consulta);
    
        if($resultado){
            ?>
                <div>
                    <h1 class="tarea_guardada_correctamente">Tarea finalizada correctamente!</h1>
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