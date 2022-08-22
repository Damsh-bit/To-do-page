<?php

function navbar(){  ?>

<?php include('../php/mostrar.php') ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="../img/brand.ico" width="50px" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="mis_tareas.php">Mis Tareas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="agregar_tareas.php">Agregar Tareas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tareas_finalizadas.php">Tareas Finalizadas</a>
        </li>
    </div>
  </div>
      <form class="d-flex">
           <span class= usuario_iniciado> <?php echo $nombre; ?></span>

          <a class="btn_salir" href="cerrar.php">Salir</a>

      
      </form>
    </div>
  </div>
</nav>

<?php 
}
?>

