<nav class="navbar navbar-expand-md navbar-light fixed-top" id="navmenu">

<div class="container" id="divmenu">

  <a class="navbar-brand" href="#">
    <img src="<?php echo $url; ?>/assets/img/aabblages.jpg" class="img-fluid img-thumbnail">
  </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarCollapse">
    <ul class="navbar-nav ml-auto m">
    
      <li class="nav-item active ml-auto">
        <a class="nav-link <?php echo $location == '' || $location == '/' ? 'active' : '' ?>" href="<?php echo $url; ?>/" >Home<span class="sr-only">(current)</span></a>
      </li>
    
      <li class="nav-item ml-auto">
        <a class="nav-link <?php echo $location == 'social' ? 'active' : '' ?>" href="<?php echo $url; ?>/social">Social</a>
      </li>
    
      <li class="nav-item ml-auto">
        <a class="nav-link <?php echo $location == 'esportes' ? 'active' : '' ?>" href="<?php echo $url; ?>/esportes">Esportes</a>
      </li>
    
      <li class="nav-item ml-auto">
        <a class="nav-link <?php echo $location == 'registro' ? 'active' : '' ?>" href="<?php echo $url; ?>/registro">Registro</a>
      </li>

      <li class="nav-item ml-auto">
      <a class="nav-link <?php echo $location == 'contato' ? 'active' : '' ?>" href="<?php echo $url; ?>/contato">Contato</a>
      </li>

      <li class="nav-item ml-auto">
        <a class="nav-link <?php echo $location == 'login' ? 'active' : '' ?>" href="<?php echo $url; ?>/login">Login</a>
      </li>

    </ul>
  </div>

</div>

</nav>