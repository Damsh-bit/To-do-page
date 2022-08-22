
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
$hoy=date("Y-m-d");
$sql = "SELECT * FROM tareas WHERE fecha='$hoy' and decodificador='$id'" ;

$resultado2 = mysqli_query($conexion,$sql);
$resultado = mysqli_query($conexion,$sql);

$row = mysqli_fetch_array($resultado2);

if(empty($row)){
    ?>
    <div class="bad">
        <div class="mostrar-tareas-inicio">
        <img src="../img/mujer-estirandose.png" alt="mujer-estirandose">
        <h2 class = "tareas_hoy">¡Felicidades, no tienes tareas para hoy!</h2>
        
        <h5 class = "tareas_hoy">En caso de querer agregar una haga click<a class="" href="agregar_tareas.php"> aqui</a></h5>       
        <a class="btn_ir_tareas" href="mis_tareas.php">Ver todas mis tareas</a> 
        </div>
        
        
    </div>                    
    <?php
}else{
    ?>
    <div>
    <h1 class="tareas_hoy">Las tareas para el dia hoy son: </h1>
    
    </div>
    <br><br>          
    <?php

        While($row = mysqli_fetch_array($resultado)){
            $id_tarea = $row['id_tarea'];
            $id_user = $row['decodificador'];
            $titulo = $row['titulo'];
            $descripcion = $row['desc_tarea'];
            $fecha = $row['fecha'];
            $progreso = $row['progreso'];
    
        ?>   
            <p>         
                <div class="div-mis-tareas-index">

                    <form action="GET">
                    <h3><?php echo $titulo; ?></h3>
                    <p ><?php echo $descripcion ?></p><br>
                                              
                    <b>Fecha: <?php echo $fecha ?> </b> <br>
                    <h7>Estado: <?php echo $progreso ?></h7>  <br> 
                    <a>ID TAREA: <?php echo $id_tarea; ?></a><br>  
                    </form>
                </div>
            </p>
        <?php
        }
}     





?>

