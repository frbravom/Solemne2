<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">
    <img src="<?=URLBASE?>/img/logo.png" width="50" height="50" alt="">
  </a>
  <a class="navbar-brand" href="<?=URLBASE?>">El bueno de Saul</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Editar Leyes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= URLBASE ?>agregar.php">Agregar</a>
          <a class="dropdown-item" href="<?= URLBASE ?>editar.php">Modificar</a>
          <a class="dropdown-item" href="<?= URLBASE ?>eliminar.php">Eliminar</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= URLBASE ?>asignar.php">Asignar leyes</a>
        </div>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Informes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="<?= URLBASE ?>informeMensual.php">Leyes publicadas mensuales</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= URLBASE ?>informeAsignadas.php">Leyes asignadas a los abogados</a>
        </div>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Leyes" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form>
  </div>
</nav>