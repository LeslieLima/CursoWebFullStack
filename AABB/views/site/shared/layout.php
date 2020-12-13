<?php $url      = $this->helpers['URLHelper']->getURL(); ?>
<?php $location = $this->helpers['URLHelper']->getLocationAdmin(); ?>
<!doctype html>

<!doctype html>
<html lang="pt-BR">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>AABB Lages</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $url; ?>/assets/img/favicon.ico" type="image/x-icon">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/libs/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/libs/font-awesome/css/font-awesome.css">

    <!-- Custom styles for this template CAROUSSEL -->
    <link href="<?php echo $url; ?>/assets/css/site.css" rel="stylesheet">

  </head>

  
  <body class="text-center">

    <header>
      
      <nav class="navbar navbar-expand-md navbar-primary fixed-top" id="navmenu">

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
                <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
              </li>
            
              <li class="nav-item ml-auto">
                <a class="nav-link" href="#">SOCIAL</a>
              </li>
            
              <li class="nav-item ml-auto">
                <a class="nav-link" href="#">ESPORTES</a>
              </li>
            
              <li class="nav-item ml-auto">
                <a class="nav-link" href="#">CONTATO</a>
              </li>

            </ul>
          </div>

        </div>

      </nav>
   
    </header>
	  


    <main role="main">
        <?php require $file; ?> <!-- o $file requerido é o site/home/index.php - este é o main -->
    </main>



    <footer class="container">
            
      <h5>SEDE LAGES</h5>
              
      <p>Av. Papa João XXIII, 2268<br>
      Área Industrial, Lages - SC<br>
      CEP 88514-720</p>

      <h5>Fone: (49) 3226-0112</h5>

    </footer>

	      

    <script type="text/javascript">
      var URL = "<?php echo $url ?>";
    </script>

    <script type="text/javascript" src="<?php echo $url; ?>/assets/libs/jquery/jquery-3.5.1.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/libs/popper/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/libs/bootstrap/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/js/site/site.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/assets/js/site/login.js"></script>

  </body>
</html>
