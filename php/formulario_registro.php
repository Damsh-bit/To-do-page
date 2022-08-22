<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="../img/brand.ico"> <!-- esto queda por resolver, es el icono de la pestaña -->

    <link rel="stylesheet" type="text/css" href="../css/styles.css">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <title>Administrador - Registrar</title>
</head>

<body>

    <div class="imagenFondo">
        <img src="../img/registroimg.jpg" alt="foto-presentacion">
    </div>

    <div class="row">

        <div class="box-register">

            <!--header verde-->
            <div class="h1Login">
                <h1>Registrarse</h1>
            </div>

            <!-- Formulario de inicio de sesion-->

            <form method="POST">

                <div class="mb-3">
                    <label for="usu" class="form-label">Usuario</label>
                    <input type="text" class="form-control" id="usu" name="usuario" pattern="[A-Za-z0-9]{6,13}" maxlength="13" placeholder="Ingresar usuario" required>
                    <div class="form-text">
                        Tu usuario debe tener entre 6 y 13 caracteres.
                    </div>
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" name="email" maxlength="50" placeholder="Ingresar email" required>
                    <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>


                    <label for="contra" class="form-label">Contraseña</label>
                    <input type="password" name="contraseña" class="form-control" pattern="[A-Za-z0-9]{8,20}" maxlength="20" placeholder="Ingresar contraseña" required>
                    <div class="form-text">
                        Tu contraseña debe tener entre 8-20 caracteres por su seguridad.
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary">Registrarse</button>

                    <h5 class="register"> Ya tienes una cuenta? <a href="formulario_inicio.php">Inicia sesion</a> </h4>

            </form>

        </div>

        <?php
        include("registrar.php");
        ?>
    </div>

    </div>


</body>

</html>