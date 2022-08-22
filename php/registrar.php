<?php

include("db.php");
    

if(isset($_POST['submit'])){
    if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contraseña']) >= 1 && strlen($_POST['email']) >= 1 ){

        $usuario = $_POST['usuario'];
        $contraseña =  md5($_POST['contraseña']);
        $email = $_POST['email'];
    
        function buscaRepetido($usuario, $email){
            include("db.php");
            $consulta1="SELECT * from usuarios where usuario = '$usuario' or correo_electronico='$email'";
            $resultado1 = mysqli_query($conexion,$consulta1);
        if(mysqli_num_rows($resultado1) > 0){
            return 1;
        }else{
            return 0;
        }

    }
    
        if(buscaRepetido($usuario, $email)== 1){
                ?>
                <h1 class="ya_existe">Usuario o Email ya existe (>_<)</h8>
                <?php
        }else{
            $consulta = "INSERT INTO usuarios( usuario, contraseña, correo_electronico) VALUES ('$usuario','$contraseña','$email')";
        
            $resultado= mysqli_query($conexion, $consulta);

            ?>
            <div class="ok-div">
                    <h1 class="ok">Usuario creado correctamente!</h1> <!-- queda por arreglar esto jeje xd -->
                </div>
            <?php
        }    
        
            
     
    }

}



    mysqli_close($conexion);
