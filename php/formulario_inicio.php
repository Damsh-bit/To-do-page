<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="../img/brand.ico">   <!-- esto queda por resolver, es el icono de la pestaña -->
     <!-- llamado css -->
    <link rel="stylesheet" type="text/css" href="../css/styles.css" >
    <link rel="stylesheet" type="text/css" href="../css/estilos.css" >

    <!-- animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <title>Administrador - Ingresar</title>
</head>
<body>
        <div class="imagenFondo">
            <img src="../img/estudiando.jpg" alt="foto-presentacion">
        </div>

    <div class="row">
        
        <!--header verde-->
               
        <div class="box">

            <h1 class="bienvenidoText">Bienvenido!</h1>
            <div class="slogan">Optimizá la gestión de tus tiempos y tus tareas de la mejor forma.</div>


            <div class="h1Login" >
                <h1>Iniciar Sesión</h1>
            </div>

                <!-- Formulario de inicio de sesion-->

           <form action="validar.php" method ="POST">
           
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" pattern="[A-Za-z0-9]{3,13}" maxlength="13" placeholder="Ingresar usuario" required>
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Contraseña</label>
                <input type="password" class="form-control" name="contraseña" pattern="[A-Za-z0-9]{8,20}" maxlength="20" placeholder="Ingresar contraseña" required>
                <h4 class="helpPass">Olvidaste tu contraseña?</h4>
            </div>
        
                <button type="submit" class="btn btn-primary">Entrar</button>
                 <h4 class="register">No tienes una cuenta? <a href="formulario_registro.php">Registrate</a></h4>
            
            </form>

                
        </div> 
        
        
    </div>

</body>
</html>