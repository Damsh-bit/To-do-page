
<?php

include('db.php');
include('mostrar.php');

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
if (!isset($_SESSION['usuario'])){
    header("Location:formulario_inicio.php");
}

$usuario = $_SESSION['usuario']; 

$sql = "SELECT * FROM tareas WHERE decodificador='$id'";

$resultado2 = mysqli_query($conexion,$sql);
$resultado = mysqli_query($conexion,$sql);

$row = mysqli_fetch_array($resultado2);
if(empty($row)){
    ?>
    <div class="bad">
        <div class="mostrar-tareas">
            <img class="img-cerebro" src="../img/cerebro-durmiendo.png" alt="cerebro-durmiendo" width="70%" heigth="70%">
            <h2 class = "tareas_hoy">¡Todavia no tienes tareas! Crea una para empezar =)</h2>
            <a class="btn_ir_agregar_tareas" href="agregar_tareas.php">Nueva tarea</a>
        </div>
        
        
    </div>                    
    <?php
}else{
    While($row = mysqli_fetch_array($resultado)){        
        $id_tarea = $row['id_tarea'];
        $id_user = $row['decodificador'];
        $titulo = $row['titulo'];
        $descripcion = $row['desc_tarea'];
        $fecha = $row['fecha'];
        $progreso = $row['progreso'];

        ?>   
             <p>         
                 <div class="div-mis-tareas">
    
                        <form action="modificar_tareas.php" method="POST">
                        <h3><?php echo $titulo; ?></h3>
                        <p ><?php echo $descripcion ?></p><br>
                                                  
                        <b>Fecha: <?php echo $fecha ?> </b> <br>
                        <h7>Estado: <?php echo $progreso ?></h7>  <br> 
                        <a>ID TAREA: <?php echo $id_tarea; ?></a><br>    
                        <?php echo "<td>
                                        <a class='btn btn_modificar' href='modificar_tareas.php?id_tarea=".$row['id_tarea']."&titulo=".$row['titulo']."&descripcion=".$row['desc_tarea']."'>Editar</a>
                                        <a class='btn btn_quitar' href='quitar_tarea_logica.php?id_tarea=".$row['id_tarea']."'>Quitar</a>
                                        <a class='btn btn_finalizar' href='finalizar_tarea_logica.php?id_tarea=".$row['id_tarea']."'>Finalizar</a>
                                        </td>";
                                echo "</tr>"; 
                                ?>
                        </form>
                </div>
            </p>
        <?php
    }
}



    




?>
