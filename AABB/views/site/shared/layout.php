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

   
    <div class="d-flex h-100 w-100 mx-auto flex-column">

      <header>
        <?php require ROOT."/views/site/shared/menu.php" ?>
      </header>
     
      <main role="main">
        <?php require $file; ?> <!-- o $file requerido é o site/home/index.php - este é o main -->
      </main>

      <footer>
        <div class="container">
          <div class="row">
  
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5 mb-md-0 mb-lg-0 mb-xl-0">
                <h5>Menu</h5>
                <a href="page2.php">Home</a>
                <a href="page2.php">Social</a>
                <a href="page2.php">Esporte</a>
                <a href="page2.php">Contato</a>
              </div>
              
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5 mb-md-0 mb-lg-0 mb-xl-0">
                <h5>Sede Lages</h5>
                <p>Av. Papa João XXIII, 2268</p>
                <p>Área Industrial, Lages - SC</p>
                <p>CEP 88514-720</p>
              </div>
  
              <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <h5>Redes Sociais</h5>
                  <div class="row">
                    <div class="col-6">
                      <i class="fa fa-instagram float-right" aria-hidden="true"></i>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-facebook float-left" aria-hidden="true"></i>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-twitter float-right" aria-hidden="true"></i>
                    </div>
                    <div class="col-6">
                      <i class="fa fa-google-plus float-left" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
            
            </div> <!-- /row-->
        </div> <!-- /container-->

      </footer>

    </div>

	      

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
