
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

$sql = "SELECT * FROM tareas_finalizadas WHERE decodificador='$id'";

$resultado = mysqli_query($conexion,$sql);
$resultado2= mysqli_query($conexion,$sql);

$row = mysqli_fetch_array($resultado2);

if(empty($row)){
    ?>
    <div class="bad">
        <div class="mostrar-tareas-finalizadas">
            <img class="img-cerebro" src="../img/mujer-sillon.png" alt="cerebro-durmiendo" width="70%" heigth="70%">
            <h2 class = "tareas_hoy">¡Todavia no finalizaste ninguna tarea!<br> Completa una! ;)</h2>
            <a class="btn_ir_tareas_finalizadas" href="mis_tareas.php">Mis tareas</a>
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
    
                    
                        <h3><?php echo $titulo; ?></h5>
                        <p> <?php echo $descripcion ?></p> <br>
    
                        <b>Fecha: <?php echo $fecha ?></b> <br>
                        <h7>Estado: <?php echo $progreso ?></h7> <br>
                        <a>ID tarea: <?php echo $id_tarea; ?></a><br>          
                        
                        
                        
                        
                        <?php echo "
                                        <a class='btn_quitar' href='quitar_tareas_finalizadas.php?id_tarea=".$row['id_tarea']."'>Quitar</a>
                                    ";
                                    ; 
                                    ?>
                </div>
            </p>
        <?php
    }
}





?>